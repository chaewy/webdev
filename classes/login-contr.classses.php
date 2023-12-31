<?php
session_start();

class LoginContr extends Login {

    private $uid;
    private $pwd;
    

    // constructor to take user data
    public function __construct($uid, $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    // run if error not occur
    public function loginUser(){
        if($this->emptyInput() == false){
            // empty input;
            $_SESSION['error'] = "empty information needed";
            header("location: ../php/Login/login.php");
            exit();
        }
        

        $this->getUser($this->uid, $this->pwd);
        
    }

    // check any empty input //BERES
    private function emptyInput(){
        $result;
        if(empty($this->uid) || empty($this->pwd) ){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    
}