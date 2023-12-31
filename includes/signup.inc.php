<?php

if(isset($_POST["submit"]))
{
    // grabbing data
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];


    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Running error handlers and user signup
    $signup->signupUser(); 

    // Going to back to the front page
    header("location: ../php/Login/login.php?error=none(signup)");
}
