<?php

if (isset($_POST["submit"]))
{
    /*Initialising global variables*/
    $username = $_POST["uid"];
    $pass = $_POST["pass"];
    
    require_once 'connect.inc.php';
    require_once 'functions.inc.php';

    /*Error handlers*/
    
    if (emptyInputLogin($username, $pass) !== false)
    {
        /*header("location: ../index.php?error=emptyinput");*/
        echo "<p>empty input</p>";
        exit();
    }

    loginDoctor($connection, $username, $pass);
}

else
{
    header("location: ../index.php=?error=234");
    exit();
}