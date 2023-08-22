<?php


class Database {
   
    protected $dbhost = "localhost";
    protected $databasename = "easybusiness";
    protected $hostuser = "root";
    protected $hostuserpass = "";
    protected $connec;
    
    public function __construct() {
        try{
            $this->connec= new PDO("mysql:host=$this->dbhost;dbname=$this->databasename",$this->hostuser,$this->hostuserpass);
            $this->connec->exec("SET NAMES UTF8");
        } catch (Exception $ex) {
            echo 'Faild Connection';
            exit();
        }
    }
    
    
    
}
?>