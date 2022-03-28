<?php

if (isset($_POST["submit"]))
{
    /*Initialising global variables*/
    $username = $_POST["uid"];
    $pass = $_POST["pass"];
    $pcode = $_POST["passcode"];
    
    require_once 'connect.inc.php';
    require_once 'functions.inc.php';

    /*Error handlers*/
    
    if (emptyInputLogin($username, $pass, $pcode) !== false)
    {
        /*header("location: ../index.php?error=emptyinput");*/
        echo "<p>empty input</p>";
        exit();
    }

    adminlogin($connection, $username, $pass, $pcode);
}

else
{
    header("location: ../index.php");
    exit();
}