<?php

//Used when someone is booking for someone else - probably needs a login varient too

if (isset($_POST["submit"])) {
    
    /*Initialising global variables*/
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $desc = $_POST["descrip"];
    $department = $_POST["department"];

    $gfname = $_POST["gfname"];
    $glname = $_POST["glname"];
    $gdob = $_POST["gdob"];
    $gemail = $_POST["gemail"];
    $gdescrip = $_POST["gdescrip"];

    

    require_once 'connect.inc.php';
    require_once 'functions.inc.php';


    /*ERROR HANDLERS*/
    
    

    /*Initialises the 'createuser' function, passes the $connection, $username and $pass
    variables to the function */
    loggedbook($connection, $firstname, $lastname, $dob, $email, $desc, $department, $gfname, $glname, $gdob, $gemail, $gdescrip);

}

else {
    header("location: ../index.php?=gfhg");
    exit();
}