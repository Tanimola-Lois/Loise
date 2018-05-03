<?php
include_once('interface.php');
    
class DB implements Connect{
    private $host = connect::DBHOST;
    private $user = connect::DBUSER;
    private $pass = connect::DBPASS;
    private $name = connect::DBNAME;
    
    public function doConnect(){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->name);
       if($this->conn->connect_error) die('Connection Error'. connect_error);
        else return $this->conn;
    }
}
?>