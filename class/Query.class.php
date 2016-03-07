<?php

require_once(DOCUMENT_ROOT.'/class/objects/Player.class.php');


class Query
{   
    private $db;
    private $sql;
    
    private $arg_array;
    
    private $prepared_query;
    private $executed_query;
    private $output_array;
    private $output_object;
    
    public function __construct($db, $sql)
    {      
        $this->db = $db;
        $this->sql = $sql;
        $this->arg_array = [];        
    }
    
    public function bind($param, $value, $option)
    {
        $this->arg_array[] = array($param, $value, $option);
    }
    
    public function execute()
    {
        $this->prepared_query = $this->db->getConnection()->prepare($this->sql);
        
        foreach( $this->arg_array as $arg )
        {
           $this->prepared_query->bindValue($arg[0], $arg[1], $arg[2]);
        }
        if($this->executed_query = $this->prepared_query->execute())
        {        
            if (!preg_match('#INSERT#i',$this->sql))
            {
                try
                {
                    $this->output_array = $this->prepared_query->fetchAll(PDO::FETCH_ASSOC);
                    $this->output_object = $this->prepared_query->fetch(PDO::FETCH_OBJ);
                    return true;
                }
                catch (Exception $e)
                {
					global $glob_debug;
					if ($glob_debug)
						echo $e;
                }
            }
        }
        else
        {
            return false;
        }
        $this->prepared_query->closeCursor();
    }
    
    public function getResult()
    {
        return $this->output_array;
    }
    
    public function getObject()
    {
        return $this->output_object;
    }

}