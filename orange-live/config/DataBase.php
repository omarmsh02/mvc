<?php
class DataBase{
    private static $instance = null;
    private $conn;

    private function __construct(){
        try{
            $this->conn = new PDO('mysql:host=localhost;dbname=orange_store', 'root', '');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch(PDOException $e){
            echo 'Failed to connect'.$e->getMessage();
        }
          
}
public static function getInstance(){
            if(!self::$instance){
                self::$instance = new DataBase();
            }
            //die(var_dump(self::$instance));
            return self::$instance->conn;
        }     
}
?>