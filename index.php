<!--https://www.youtube.com/watch?v=4sosXZsdy-s-->

<!--Initial design, use git - initialised at: https://github.com/Skyrub-dev/designs-->

<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <title>Doctors Surgery | Home</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
      <a href="#" class="navbar-brand">Doctors Surgery</a>

      <button 
      class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#instructors" class="nav-link">F.A.Q</a>
          </li>
          <li class="nav-item">
          <?php
          if (isset($_SESSION["username"]))
          {
            /*Grabs the username of the user and displays it on the site*/
            echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#loggedin'>
            Book an appointment
            </button>";
            echo "<button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#pending'>
            View pending appointments
            </button>";
            echo "<li> <a href='includes/logout.inc.php'>Logout</a></li>";
          }
          else
          {
            echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModalToggle'>
            Book an appointment
            </button>";
          }
        ?>
            
            <!--<a href="#instructors" class="nav-link">Book an appointment</a>-->
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

<!--https://www.youtube.com/watch?v=gLWIYk0Sd38-->

  <!--Warning for users if they're in need call XXX or visit hospital-->
  <!--Need to fix positioning of icon and text to fit on one line-->
  <section class="vg-primary bg-warning text-dark p-3">
    <div class="container">
      <div class="imga">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
          <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
          <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
        </svg>
      </div>
      <div class="d-md-flex justify-content-between align-items-center">
        <h3 class="mb-3 mb-md-0"><b>Have an emergency? - Contact 999</b></h3>
      </div>
    </div>
  </section>

  <!--Main site desciptor box-->

  <section class="bg-dark text-light p-5 text-center">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
        <?php
          if (isset($_SESSION["username"]))
          {
            /*Grabs the username of the user and displays it on the site*/
            echo "<h1>We're here to help, " . $_SESSION["username"] . "!</span></h1>";
            
          }
          else
          {
            echo "<h1>Here to help!
            </span></h1>";
          }
        ?>
          
        </div>
      </div>
    </div>
  </section>

  <section class="p-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">

              </div>
              <h3 class="card-title mb-3">
                BMI and body weight
              </h3>
              <p class="card-text">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bmi">
                  Calculate
                </button>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
  
                </div>
                <h3 class="card-title mb-3">
                  NHS Health A to Z index
                </h3>
                <p class="card-text">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#health">
                    Find out more
                  </button>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="col-md">
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
    
                  </div>
                  <h3 class="card-title mb-3">
                    Depression assessment
                  </h3>
                  <p class="card-text">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#depress">
                      Find out more
                    </button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="faq" class="p-5">

</section>

<!--Need to optomise for mobile-->

<section id="overview" class="p-5 bg-dark"> <!--Make primary maybe?-->
  <div class="container">
    <h2 class="text-center text-white">Overview of services we provide:</h2>
    <p class="lead text-center text-white mb-5">
      
    </p>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card bg-warning" style="width: 18rem;">
          <!--<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Ambulances_outside_the_Accident_and_Emergency_Department_-_geograph.org.uk_-_403483.jpg" class="card-img-top" alt="...">-->
          <div class="card-body">
            <h5 class="card-title">A&E Services</h5>
            <p class="card-text"></p>
            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" style="width: 18rem;">
          <!--<img src="https://cdn.pixabay.com/photo/2016/03/05/19/02/vegetables-1238252_960_720.jpg" class="card-img-top" alt="...">-->
          <div class="card-body">
            <h5 class="card-title">Dietics</h5>
            <p class="card-text"></p>
            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" style="width: 18rem;">
          <!--<img src="https://cdn.pixabay.com/photo/2016/03/05/19/02/vegetables-1238252_960_720.jpg" class="card-img-top" alt="...">-->
          <div class="card-body">
            <h5 class="card-title">Mental Health Services</h5>
            <p class="card-text"></p>
            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card" style="width: 18rem;">
          <!--<img src="https://cdn.pixabay.com/photo/2016/03/05/19/02/vegetables-1238252_960_720.jpg" class="card-img-top" alt="...">-->
          <div class="card-body">
            <h5 class="card-title">General Surgery</h5>
            <p class="card-text"></p>
            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="search" class="p-5 bg-dark"> <!--Make primary maybe?-->
  <div class="container">
    <div class="row g-4">
      <div class="col-md">
        <h2 class="text-center text-white">Looking for something specific?</h2>
        <p class="lead text-center text-white mb-5">
          <!--SEARCH HERE-->
          
        </p>
      </div>
    </div>
    
    
  </div>
</section>

<section id="faq" class="p-5 bg-dark">
  <div class="container">
    <h2 class="text-center text white">F.A.Q</h2>
    <p class="lead text-center text-white mb-5">
      F.A.Q
    </p>
    <!--Accordion-->
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <i>Where are we located?</i>
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">We are located at, Furness College, Barrow-in-Furness</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What services do we provide?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            Here are some of the services we provide:
            </br>
            - dsfsdfsdf
            </br>
            - fsdfsdf
            </br>
            - fsdfsdf
            </br>
            - sfdsdfsdf
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
  </div>
</section>

<section id="instructors" class="p-5 bg-primary"> <!--Make primary maybe?-->
  <div class="container">
    <div class="row g-4">
      <div class="col-md">
        <h2 class="text-center text-white">Find us</h2>
        <p class="lead text-center text-white mb-5">
          <!--THINKING OF CUTTING THIS OUT FOR JUST THE MAP-->
          <ul class="list-group list-group-flush lead">
            <li class="list-group-item">
              <span class="fw-bold">Main location</span> 50 mainstreet, Boston MA
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Main location</span> 50 mainstreet, Boston MA
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Main location</span> 50 mainstreet, Boston MA
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Main location</span> 50 mainstreet, Boston MA
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Main location</span> 50 mainstreet, Boston MA
            </li>
          </ul>
        </p>
      </div>
    </div>
    
    
  </div>
</section>

<!-- Modal for booking system -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!--Might need to hide if the user is already logged in-->
        <h5 class="modal-title" id="exampleModalToggleLabel">Before you start...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--Potentially another two models underneath? could utilise login script-->
        <button class="btn btn-primary" data-bs-target="#login" data-bs-toggle="modal" data-bs-dismiss="modal">Login</button>
        <button class="btn btn-secondary" data-bs-target="#signup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up</button>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Skip</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" aria-hidden="true" aria-labelledby="loginlabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Welcome back!</h5>
      <div class="modal-body">
      <form action ="includes/login.inc.php" method ="post">
            <input type="text" name="uid" placeholder="Username...">
            <br>
            <br>
            <input type="password" name="pass" placeholder="Password...">
            <br>
            <br>
            <button type="submit" name="submit">login</button>
        </form>
      </div>
      <?php
    /*error handlers, each one of these has a function attatched to it in
    functions.inc.php */
if (isset($_GET["error"]))
{
    if ($_GET["error"] == "emptyinput")
    {
        echo "<h1>Fill in all fields</h1>";
    }
    else if ($_GET["error"] == "wronglogin")
    {
        echo "<h1>incorrect login information</h1>";
    }
    else if ($_GET["error"] == "passnotverified")
    {
        echo "<h1>Password is incorrect, remember passwords are case sensitive</h1>";
    }
}
?>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Book</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="signup" aria-hidden="true" aria-labelledby="loginlabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Welcome!</h5>
      <div class="modal-body">
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username...">
        <br>
        <br>
        <input type="password" name="pass" placeholder="Password...">
        <br>
        <br>
        <input type="password" name="passrepeat" placeholder="Enter Password again...">
        <br>
        <br>
        <input type="text" name="firstname" placeholder="First name">
        <br>
        <br>
        <input type="text" name="lastname" placeholder="Surname">
        <br>
        <br>
        <input type="date" name="dob" placeholder="Date of birth">
        <br>
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
      </div>
      <?php
    /*error handlers, each one of these has a function attatched to it in
    functions.inc.php */
if (isset($_GET["error"]))
{
    if ($_GET["error"] == "emptyinput")
    {
        echo "<h1>Fill in all fields</h1>";
    }
    else if ($_GET["error"] == "invaliduid")
    {
        echo "<h1>Please choose a valid username</h1>";
    }
    else if ($_GET["error"] == "passwordsdontmatch")
    {
        echo "<h1>Passwords don't match</h1>";
    }
    else if ($_GET["error"] == "stmtfailed")
    {
        echo "<h1>Something went wrong, please try again!</h1>";
    }
    else if ($_GET["error"] == "usernametaken")
    {
        echo "<h1>Username is already taken!</h1>";
    }
    else if ($_GET["error"] == "none")
    {
        echo "<h1>successfully signed up!</h1>";
        header("location: index.php");
        exit();
    }
}
?>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Book</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Please enter some information about yourself...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--NEED TO INCLUDE INPUT VALIDATION HERE: https://www.the-art-of-web.com/javascript/ajax-validate/-->
        input fields here, followed by post to seperate table in mysql
        <form action="#">
          <label for="fname">First name:</label>
          <input type="text" id="fname" name="fname"><br><br>
          <label for="lname">Last name:</label>
          <input type="text" id="lname" name="lname"><br><br>
          <label for="dob">DOB:</label>
          <input type="date" id="dob" name="dob"><br><br>
          <label for="descrip">Description of problem:</label>
          <input type="text" id="descrip" name="descrip"><br><br>
          <!--<input type="submit" value="Submit">-->
        </form> 
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="loggedin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Please enter some information about yourself...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--NEED TO INCLUDE INPUT VALIDATION HERE: https://www.the-art-of-web.com/javascript/ajax-validate/-->
        input fields here, followed by post to seperate table in mysql
        <form action="#">
          <?php
            $link = mysqli_connect("localhost", "root", "", "doctorsdb");

            if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
              }

            echo "<form action='#'>";
            echo "<label for='fname'>Firstname:</label>";
            echo "<input type='text' id='fname' name='fname'><br><br>";

          ?>
          <!--https://code-boxx.com/autocomplete-php-mysql/-->
          <!--Should use $_SESSION GET-->
          <label for="fname">First name:</label>
          <input type="text" id="fname" name="fname"><br><br>
          <label for="lname">Last name:</label>
          <input type="text" id="lname" name="lname"><br><br>
          <label for="dob">DOB:</label>
          <input type="date" id="dob" name="dob"><br><br>
          <label for="descrip">Description of problem:</label>
          <input type="text" id="descrip" name="descrip"><br><br>
          <!--<input type="submit" value="Submit">-->
        </form> 
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Continue</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel3">When are you avaliable?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Insert calendar here, needs to be interactive and pass the contents of the date and time to a post method to be uploaded to the data base, take a look at doing it in Javascript: https://mindfusion.eu/blog/interactive-calendar-with-events-in-javascript/
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Book</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel4">Overview of what you've entered...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        fetch data entered, maybe can access using temp?? not sure need to look into this page as a whole more
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pending" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel4">Pending appointments</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
	/*https://www.tutorialrepublic.com/php-tutorial/php-mysql-select-query.php */
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "", "doctorsdb");
 
		// Check connection
		if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 
		// Attempt select query execution
		$sql = "SELECT * FROM login";
			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					echo "<table>";
					echo "<tr>";
					echo "<th>Username</th>";
					echo "<th>First name</th>";
					echo "<th>Surname</th>";
					echo "<th>Date of Birth</th>";
          echo "<th>Email</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>" . $row['username'] . "</td>";
					echo "<td>" . $row['firstname'] . "</td>";
					echo "<td>" . $row['lastname'] . "</td>";
					echo "<td>" . $row['dob'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . "<button class='btn btn-danger' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Cancel</button>" . "</td>";
          //COULD HAVE PHP IN A FUNCTION TO DROP TABLE ONCE CLICKED
					echo "</tr>";
					}
				echo "</table>";
				// Free result set
			mysqli_free_result($result);
			} else{
				echo "No records matching your query were found.";
			}
		} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
 
	// Close connection
	mysqli_close($link);
?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bmi" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bmi">BMI checker</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe id="tool_bmi" src="https://assets.nhs.uk/tools/bmi/index.html?syn_id=81c84dc0-6b26-11ec-89f7-e334b33bb930" style = "width:100%;" frameborder="0" scrolling="no" seamless></iframe><script src="https://assets.nhs.uk/tools/bmi/js/iframe_helper.js"></script><!--NHS tool-->
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="health" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="health">Health A to Z</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div style="position: relative; max-width: 500px; height: 300px"><iframe src="https://api-bridge.azurewebsites.net/conditions/?p=all&aspect=name,overview_short,symptoms_short,symptoms_long,treatments_overview_short,other_treatments_long,self_care_long,prevention_short,causes_short&tab=0&uid=81c84dc0-6b26-11ec-89f7-e334b33bb930" title="NHS website - health a-z" style="position: absolute; height: 100%; width: 100%; border: 2px solid #015eb8;"></iframe></div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="depress" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="depress">Think you're suffering from depression?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe id="tool_self-assessments_42" src="https://assets.nhs.uk/tools/self-assessments/index.html?variant=42&syn_id=81c84dc0-6b26-11ec-89f7-e334b33bb930" style = "width:100%;" frameborder="0" scrolling="no" seamless></iframe><script src="https://assets.nhs.uk/tools/self-assessments/js/iframe_helper.js"></script>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
<!--https://www.youtube.com/watch?v=Cc3K2jDdKTo-->
<script>
  $(document).ready(function()
  {
    $('#overview').on('mouseover', function()
    {
      $('#overview').fadeout(200);
    });
  });

</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>