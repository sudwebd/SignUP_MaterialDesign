<?php
include('validation.php');
if(isset($_POST['submit'])){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $telephone=$_POST['telephone'];
  $calendar=$_POST['calendar'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password'];
  if(isset($_POST['selects'])){
  $selects=$_POST['selects'];
  if($err==0){
    $location="created.php";//redirect to this if no errors
    header("Location: " . $location);
  }
}
}
?>
<html>
<head>
  <title>SignUp</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="Content/bootstrap.min.css" rel="stylesheet" />
  <link href="Content/materialize-v0.97.5/css/materialize.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="stylesheets/styles.css" rel="stylesheet" />
</head>
<body>
  <script src="Scripts/jquery-3.1.1.min.js"></script>
  <script src="Scripts/bootstrap.min.js"></script>
  <script src="Content/materialize-v0.97.5/js/materialize.min.js"></script>
  <script src="Scripts/pagescript.js"></script>
  <div class="page">
      <div class="background1">
          <video autoplay="autoplay" loop="loop" muted="" class="background-video">
              <source src="images/12345.mp4" type="video/mp4" />
          </video>
      </div>
      <nav class="toper light-blue darken-1" style="height:150px;max-height:150px;">
          <div class="nav-wrapper z-depth-2">
            <a href="#" class="brand-logo center" style="text-decoration:none;color:white;top:15px;"><img src="images/signupIcon.png" /></a>
              <ul id="nav-mobile" class="left hide-on-med-and-down" style="padding-top:45px;padding-left:50px;">
                  <li><a href="#" style="text-decoration:none;">Home</a></li>
                  <li><a href="#" style="text-decoration:none;">Login</a></li>
                  <li><a href="#" style="text-decoration:none;">Components</a></li>
              </ul>
          </div>
      </nav>
      <br />
      <br />
      <br />
      <br />
      <br />
<?php
      require("content.php");
?>
    </div>
</body>
</html>
