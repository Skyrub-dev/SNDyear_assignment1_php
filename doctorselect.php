<?php
  session_start();
?>

<html>
<?php
          if (isset($_SESSION["docusername"]))
          {
            /*Grabs the username of the user and displays it on the site*/
            echo "<li><p>You are signed in as: " . $_SESSION["docusername"] . "</p></li>";
            echo "<li> <a href='includes/logout.inc.php'>Logout</a></li>";
          }
          else
          {
            header("location: index.php");
            exit();
          }
        ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Doctor</title>
</head>
<body style="background-color:#292b2c;">
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
            
          </li>
          <li class="nav-item">
            
            <!--<a href="#instructors" class="nav-link">Book an appointment</a>-->
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <section class="bg-dark text-light p-5 text-center">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>Welcome doctor
          </span></h1>
          <?php
	/*https://www.tutorialrepublic.com/php-tutorial/php-mysql-select-query.php */
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "", "doctorsdb");
 
		// Check connection
		if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 

    echo "<form method='post'>" . "<input type='submit' name='Filter all' value='button1'/>";
    echo "<form method='post'>" . "<input type='submit' name='button1' value='button2'/>";
    echo "<form method='post'>" . "<input type='submit' name='button1' value='button3'/>";
    echo "<form method='post'>" . "<input type='submit' name='button1' value='button4'/>";

    //Create PHP functions filter buttons by potentially - https://www.geeksforgeeks.org/how-to-call-php-function-on-the-click-of-a-button/
    

    echo "<td>" . "<button class='btn btn-danger' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Filter AAE</button>" . "</td>";
    echo "<td>" . "<button class='btn btn-danger' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Filter GS</button>" . "</td>";
    echo "<td>" . "<button class='btn btn-danger' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Cancel</button>" . "</td>";
    echo "<td>" . "<button class='btn btn-danger' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Cancel</button>" . "</td>";


		// Attempt select query execution
		$sql = "SELECT * FROM guestbook";
			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					echo "<table color:red>";
					echo "<tr>";
					echo "<th>Guestno.</th>";
					echo "<th>First name</th>";
					echo "<th>Surname</th>";
					echo "<th>Date of Birth</th>";
          echo "<th>Email</th>";
          echo "<th>Description</th>";
          echo "<th>Assigned to:</th>";
          echo "<th>Department</th>";
          echo "<th>Booking for self?</th>";
          echo "<th>Guest Firstname</th>";
          echo "<th>Guest Surname</th>";
          echo "<th>Guest Date of Birth</th>";
          echo "<th>Guest Email</th>";
          echo "<th>Guest Description</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>" . $row['guestno'] . "</td>";
					echo "<td>" . $row['firstname'] . "</td>";
					echo "<td>" . $row['lastname'] . "</td>";
					echo "<td>" . $row['dob'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['description'] . "</td>";
          echo "<td>" . $row['assigned_to'] . "</td>";
          echo "<td>" . $row['department'] . "</td>";
          echo "<td>" . $row['self'] . "</td>";
          echo "<td>" . $row['gfname'] . "</td>";
          echo "<td>" . $row['glname'] . "</td>";
          echo "<td>" . $row['gdob'] . "</td>";
          echo "<td>" . $row['gemail'] . "</td>";
          echo "<td>" . $row['gdescrip'] . "</td>";
          echo "<td>" . "<button class='btn btn-primary' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Assign</button>" . "</td>";
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
 

  //EG...
  /* if (isset($_POST['button1']))
  {
    $sql = "SELECT * FROM guestbook";
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
					echo "<td>" . $row['guestno'] . "</td>";
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
  } */

	// Close connection
	mysqli_close($link);
?>

        </div>
      </div>
    </div>
  </section>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
