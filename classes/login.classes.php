<?php

class Login extends Dbh {

        protected function getUser($uid, $pwd){
            $stmt = $this->connect()->prepare('SELECT users_id, users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');
    
            if(!$stmt->execute([$uid, $uid])){ 
                $stmt = null; // delete statement 
                header("location: ../php/Home/home.php?error=stmtfailed");
                exit();
            }
    
            // Fetch both user ID and password hash
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if (!$userData) {
                $stmt = null;
                header("location: ../php/Login/login.php?error=usernotfound");
                exit();
            }
    
            $checkPwd = password_verify($pwd, $userData["users_pwd"]);
    
            if (!$checkPwd) {
                $stmt = null;
                header("location: ../php/Login/login.php?error=wrongpassword");
                exit();
            }
    
            // Set session variables
            session_start();
            $_SESSION["userid"] = $userData["users_id"];
            $_SESSION["useruid"] = $uid;
    
            $stmt = null;
        }
}
    