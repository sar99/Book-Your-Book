<?php
session_start();
$conn=mysqli_connect("localhost","root","","dbslab")
        or die('Error connecting to MySQL server.'); 
        function err($n)
        {
          $n=trim($n);//remove extra tab spaces
          $n=stripslashes($n);//remove blackslashes from input to avoid xss attack
          $n=htmlspecialchars($n);//convert html to plain text
          return $n;
          }?>
<!DOCTYPE html>
<html>
<head>
	<title>book details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
</head>
<body>


<!-- Nav bar -->

<nav class="navbar navbar-light bg-light" style="padding: 1.5vw; padding-bottom: 0.5vw;">
	<a class="navbar-brand" style="font-family: 'Monoton', cursive; letter-spacing: 0.1vw; font-size: 2vw;">
		<img src="images/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
	 Book Your Book</a>
    
  <?php
    
  if(isset($_SESSION['yr']))
  { $yr=$_SESSION['yr'];
        $batch=$_SESSION['batch'];
        $rollno=$_SESSION['rollno'];
        $sql= "SELECT * FROM users where Yr='$yr' and Batch='$batch' and RollNo='$rollno'";
        $result1=mysqli_query($conn,$sql);
        $row1=mysqli_fetch_array($result1);
    echo '<div style="font-family: "Playfair Display", serif; font-size: 2vw;">Hello, ' . $row1['Name'] . ' </div></nav>'; }
  else
  {
    echo "<form class='form-inline'>
        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#login' style='margin-right: 1vw;background-color: #AA4E39; border-color: #5D2A1E;font-size: 1.5vw;z-index: 100;'>
      Login
    </button>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#register' style='background-color: #AA4E39; border-color: #5D2A1E;font-size: 1.5vw;z-index: 100;'>
      Register
    </button>
    </form>
  </nav>";
  }
  ?>

  <!-- Login -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #AA4E39;" >
          <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white;">Sign In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="Login.php" method="post">
              <label for="exampleInputPassword1">Roll No.</label>
                    <div class="form-inline">
                          <input type="text" class="form-control" id="yr" placeholder=" " style="width: 30%;" name="yr" required=""> -
                          <input type="text" class="form-control" id="batch" placeholder=" " style="width: 30%;" name="batch" required=""> -
                          <input type="text" class="form-control" id="rollno" placeholder=" " style="width: 30%;" name="rollno" required="">
                          <small id="emailHelp" class="form-text text-muted">Enter in format: 20XX-XXX-000</small>

              </div><br>
              <div class="form-group">
                    <label for="Password">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required="">
              </div>
              <div class="modal-footer">
                     <button type="submit" class="btn btn-secondary"  name="submit" style="background-color: #AA4E39;">Login</button>
              </div>
              <a href="forgotpass.php" style="color: #AA4E39;">Forgot Password?</a>
          </form>
       </div>
     </div>
     </div>
  </div>

  <!-- Register -->
  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #AA4E39;" >
          <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white;">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="Register.php" method="post">
              <div class="form-group">
                    <label for="Name">Name</label>
                          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required="">
              </div>
                    <label for="exampleInputPassword1">Roll No.</label>
                    <div class="form-inline">
                          <input type="text" class="form-control" id="yr" placeholder=" " style="width: 30%;" name="yr" required=""> -
                          <input type="text" class="form-control" id="batch" placeholder=" " style="width: 30%;" name="batch" required=""> -
                          <input type="text" class="form-control" id="rollno" placeholder=" " style="width: 30%;" name="rollno" required="">
                          <small id="emailHelp" class="form-text text-muted">Enter in format: 20XX-XXX-000</small>

              </div><br>
              <div class="form-group">
                    <label for="Name">Institute Name</label>
                          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Institute Name" name="institute" required="">
              </div>
              <!-- <div class="form-group">
                    <label for="Password">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required="">
              </div>
              <div class="form-group">
                    <label for="Password">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass2" required="">
              </div> -->
              <div class="modal-footer">
                     <button type="submit" class="btn btn-secondary" name="submit" style="background-color: #AA4E39;">Register</button>
              </div>
          </form>
       </div>
     </div>
     </div>
  </div>

<ul class="nav nav-tabs">
  	<li class="nav-item col-lg-2">
    <a class="nav-link" href="dashboard.php" style="color: #5D2A1E; text-align: center;font-size: 1.2vw;">HOME</a>
  	</li>
  	<li class="nav-item col-lg-2">
    <a class="nav-link" href="about.php" style="color: #5D2A1E;text-align: center;font-size: 1.2vw;">ABOUT</a>
  	</li>
  	<li class="nav-item col-lg-2">
    <a class="nav-link" href="library.php" style="color: #5D2A1E;text-align: center;">LIBRARY</a>
  	</li>
  	<li class="nav-item col-lg-2">
    <a class="nav-link active" href="discuss.php" style="color: #5D2A1E;text-align: center;font-size: 1.2vw;  border-top: 2px solid #AA4E39;font-size: 1.2vw;">DISCUSS</a>
  	</li>
    <li class="nav-item col-lg-2"></li>
    <li class="nav-item col-lg-1">
      <a class="nav-link" href="profile.php" style="color: #5D2A1E;text-align: right; font-size: 1.2vw;"><?php if(isset($_SESSION['yr'])) echo "PROFILE" ; else echo " ";?></a>
    </li>
    <li class="nav-item col-lg-1">
    <a class="nav-link" href="logout.php" style="color: #5D2A1E;text-align: right;font-size: 1.2vw;"><?php if(isset($_SESSION['yr'])) echo "LOGOUT" ; else echo " ";?></a>
    </li>
</ul>

<h1 style="text-align: center; margin-top: 20VW;">Chat Box and Discussion forum Coming Soon ..... </h1>

</nav>
</body>
</html>