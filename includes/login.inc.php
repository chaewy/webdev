<?php
session_start();

if(isset($_POST["submit"]))
{
    // grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiate SignupContr class 
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classses.php";
    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user signup
    $login->loginUser(); 

    // Going to back to the front page
    header("location: ../php/Home/home.php?error=none(login)");
}
