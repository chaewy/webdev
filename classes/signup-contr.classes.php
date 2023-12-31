<?php
session_start();
class SignupContr extends Signup {

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    // constructor to take user data
    public function __construct($uid, $pwd, $pwdRepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    // run if error not occur
    public function signupUser(){
        if($this->emptyInput() == false){
            // empty input;
            $_SESSION['error'] = "empty information needed";
            header("location: ../php/Signup/Signup.php");
            exit();
        }
        if($this->invalidUid() == false){
            // invalid username;
            $_SESSION['error'] = "Invalid username. Please use only letters and numbers, starting with a letter.";
            header("location: ../php/Signup/Signup.php");
            exit();
        }
        if($this->invalidEmail() == false){
            // invalid email;
            $_SESSION['error'] = "Invalid email format.";
            header("location: ../php/Signup/Signup.php");
            exit();
        }
        if($this->pwdMatch() == false){
            // password dont match;
            $_SESSION['error'] = "password do not match.";
            header("location: ../php/Signup/Signup.php");
            exit();
        }
        if($this->uidTakenCheck() == false){
            // username or email taken;
            $_SESSION['error'] = "Username or email is alreadey taken!.";
            header("location: ../php/Signup/Signup.php");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
        
    }

    // check any empty input //BERES
    private function emptyInput(){
        $result;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email) ){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    // check username if its a valid usesrname type // BERES
    private function invalidUid(){
        $result;
        if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }    

    // check email address // BERES
    private function invalidEmail(){
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else{
            $result = true;
        } 
        return $result;
    }

    // check if password is repeat // BERES
    private function pwdMatch(){
        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
    }
    return $result;
}


    // check if password or username is taken // BERES
    private function uidTakenCheck(){
        $result;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else{
            $result = true;
        } 
        return $result;
    }
    
}