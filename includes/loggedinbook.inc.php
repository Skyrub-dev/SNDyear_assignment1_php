<?php
session_start();
//Responsible for passing temporary guest bookings

if (isset($_POST["submit"])) {
    require_once 'connect.inc.php';
    require_once 'functions.inc.php';
    /*Initialising global variables*/
    //$fname = $_POST["fname"];
    $sqlpatient = "SELECT * FROM login WHERE username='$_SESSION[username]' ";
    $qsqlpatient = mysqli_query($connection, $sqlpatient);
    $rspatient = mysqli_fetch_array($qsqlpatient);
    
    $firstname = $_SESSION["firstname"];
    $lastname = $rspatient["lastname"];
    $dob = $_SESSION["dob"];
    $email = $rspatient["email"];
    $desc = $_POST["descrip"];
    $department = $_POST["department"];
    $id = $rspatient["uid"];
    

    /*Initialises the 'createuser' function, passes the $connection, $username and $pass
    variables to the function */
    //loggedbook($connection, $fname, $desc);
    book($connection, $firstname, $lastname, $dob, $email, $desc, $department, $id);


}
/*if result does not match these handlers, will redirect to the signup page */
else {
    header("location: ../index.php?=gfhg");
    exit();
}