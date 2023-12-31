<?php

class Dbh {

    public $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    
    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=emporium', $username, $password);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error! : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
