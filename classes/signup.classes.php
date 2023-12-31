<?php

class Signup  extends Dbh {

    protected function setUser($uid, $pwd, $email){
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?,?,?);');

        //hash pwd
        $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashPwd, $email))){ 
            $stmt = null; // delete statement 
            header("location: ../php/Signup/Signup.php?error=stmtfailed");
            exit();
        }

        $stmt = null;

    }

    protected function checkUser($uid, $email){
        try {
            $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?');
    
            // check if user does exist in database
            if(!$stmt->execute(array($uid, $email))){ 
                throw new Exception("stmtfailed");
            }
    
            // fetch the result
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // check if database's email and username have already been taken
            if($result){
                // user or email exists
                return false;
            } else {
                // user and email are available
                return true;
            }
        } catch (Exception $e) {
            // Handle the exception, log it, or return an appropriate error response kut
            return false;
        }
    }
    
    
    
    
}