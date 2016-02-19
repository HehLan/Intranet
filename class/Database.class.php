<?php


// Database class
class Database
{    
    private $host;
    private $port;
    private $bdd;
    private $user;
    private $pwd;
    private $connexion;
    private $sql;
    private $query;    
    
    public function __construct()
    {        
        $this->host = 'localhost';
        $this->port = '3306';
        $this->bdd = 'hehlanbd';
        $this->user = 'root';
        $this->pwd = '1234';
        $this->connexion = '';
        $this->sql = '';
        $this->query = '';

        try
        {
            $this->connexion = new PDO(
                    'mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->bdd,
                    $this->user,
                    $this->pwd,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch (Exception $e)
        {
            echo 'An error has occured\n';
            echo 'Code:' . $e->getCode();
            echo 'Message:' . $e->getMessage();
            die();
            exit;
        }
    }
    
    public function query($sql)
    {
        $this->query = $this->connexion->prepare($sql);        
    }
    
    
    public function bindValue($param, $var, $option)
    {
        $this->query->bindValue($param, $var, $option);
    }
    
    public function getQuery()
    {
        return $this->query;
    }

    

}
