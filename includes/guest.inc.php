<?php

//Responsible for passing temporary guest bookings

if (isset($_POST["submit"])) {
    
    /*Initialising global variables*/
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $desc = $_POST["descrip"];
    /*Using 'connect.inc.php' to actually connect to the database first, then
    using 'functions.inc.php' to grab the functions which have been set on the
    error handlers below */
    require_once 'connect.inc.php';
    require_once 'functions.inc.php';

    //NEED TO CHANGE THESE

    /*ERROR HANDLERS*/
    if(isset($_SESSION["username"]))
    {
        $sqlpatient = "SELECT * FROM login WHERE username='$_SESSION[username]' ";
        $sql = "INSERT INTO guestbook (firstname, lastname, dob, email) VALUES (?, ?, ?, ?);";
    }
    /*Error for if the input fields have not been answered - will change the URL to
    correspond*/
    

    /*Initialises the 'createuser' function, passes the $connection, $username and $pass
    variables to the function */
    book($connection, $firstname, $lastname, $dob, $email, $desc);

}
/*if result does not match these handlers, will redirect to the signup page */
else {
    header("location: ../index.php?=gfhg");
    exit();
}