<?php

//Responsible for passing temporary guest bookings

if (isset($_POST["submit"])) {
    
    /*Initialising global variables*/
    $desc = $_POST["descrip"];
    /*Using 'connect.inc.php' to actually connect to the database first, then
    using 'functions.inc.php' to grab the functions which have been set on the
    error handlers below */
    require_once 'connect.inc.php';
    require_once 'functions.inc.php';

    //NEED TO CHANGE THESE
    

    /*Initialises the 'createuser' function, passes the $connection, $username and $pass
    variables to the function */
    loggedbook($connection, $desc);

}
/*if result does not match these handlers, will redirect to the signup page */
else {
    header("location: ../index.php?=gfhg");
    exit();
}