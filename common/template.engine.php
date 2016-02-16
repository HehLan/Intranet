<?php

class template {

    // NEED $theme_path AS A GLOBAL VARIABLE
    protected $file;
    protected $values = array();
    protected $loops = array();

    public function __construct($file) {
        // The constructor takes a .tpl file path as parameter
        $this->file = $file;
    }

    public function assign($key, $value) {
        // Add the new parameters to loops or values
        // to be generated later
        if (is_array($value)) {
            $this->loops[$key] = $value;
        } else {
            $this->values[$key] = $value;
        }
    }

    public function generate() {
        if (!file_exists($this->file)) {
            // If the file couldn't be opened
            return "Error this template file couldn't be loaded";
        }
        $content = file_get_contents($this->file);


        // Testing the inclusion blocks {\include:template}
        //DO WHILE method to handle recursive conditional blocks or loops?
        $inclusion_match = '#\{\\\include:(.*?)\}#';
        preg_match_all($inclusion_match, $content, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $match_path = $GLOBALS['theme_path'] . '/' . $match[1];
            if (file_exists($match_path)) {
                $included_content = file_get_contents($match_path);
            } else {
                $included_content = '';
            }
            $content = str_replace($match[0], $included_content, $content);
        }

        $output = $content;
        foreach ($this->values as $key => $value) {
            // Testing the conditional blocks {\if:condition}{\end}
            $condition_match = '#\{\\\if:( ?)' . $key . '( ?)\}(.*?)({\\\else}(.*?))?\{\\\end( ?)\}#s';
            preg_match_all($condition_match, $content, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                if ($value) {
                    $output = preg_replace($condition_match, $match[3], $output);
                } else {
                    // If a else condition is defined
                    if (isset($match[5]))
                        $output = preg_replace($condition_match, $match[5], $output);
                    else
                        $output = preg_replace($condition_match, '', $output);
                }
            }
            // Replace every variable in $content
            $tag = '{\\' . $key . '}';
            $output = str_replace($tag, $value, $output);
        }
        $content = $output;

        foreach ($this->loops as $loop => $table) {
            // Seek for {\begin:$1}$2{\end} structures for every $1
            // and replace it with an iteration of $2 where every
            // {\$1:$3} = $1[][$3]

            $loop_match = '#\{\\\begin:( ?)' . $loop . '( ?)\}(.*?)\{\\\end( ?)\}#s';
            preg_match_all($loop_match, $content, $matches, PREG_SET_ORDER);

            foreach ($matches as $match) {
                $match_seed = $match[3];
                $list = null;
                foreach ($table as $row => $element) {
                    $el_temp = $match_seed;
                    foreach ($element as $key => $val) {
                        $tag = "{\\" . $loop . ":" . $key . "}";
                        $el_temp = str_replace($tag, $val, $el_temp);
                    }
                    $list .= $el_temp;
                }
                $output = str_replace($match[0], $list, $output);
            }
        }

        echo $output;
    }

}

?>
	