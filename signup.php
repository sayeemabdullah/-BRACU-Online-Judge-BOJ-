<?php include 'connection.php'; 
if(isset($_POST['done'])){
  $SID = $_POST['sid'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $confirmpassword = $_POST['psw-repeat'];
  if ($password != $confirmpassword) {
    echo '<script language="javascript">';
    echo 'alert("Password Doesnot Match.")';
    echo '</script>';
    }
  else{
$query1 = "INSERT INTO `user`(`sid`,`name`,`email`,`password`) VALUES ('$SID','$name', '$email', '$password')";
$query = mysqli_query($connection,$query1);
header("Location: signin.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="icon" type="image/png" href="image/BOJ.png">
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
<title>BRACU Online Judge</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background: #2c3338;}
* {box-sizing: border-box;}
/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius:10px;
}
/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus , input[type=email]:focus {
  background-color: #c7f0ec;
  outline: none;
}
/* Set a style for all buttons */
button {
  
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 12px;
}
button:hover {
  opacity:1;
}
.signupbtn {
  border-radius: 4px;
  width: 100%;
  background-color: #ea4c88;
  text-transform: uppercase;
  font-size:20px;
}
/* Add padding to container elements */
.container {
  padding: 16px;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #2c3338;
  padding-top: 50px;
}
/* Modal Content/Box */
.modal-content {
  background-color: #2c3338;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #2c3338;
  width: 80%; /* Could be more or less, depending on screen size */
  border-radius: 15px;
}
/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .signupbtn {
     width: 100%;
  }
}
h1,h2{
    text-align: center;
}
h1{
    font-family: 'Audiowide';
    color:white;
}
h2{
    font-family: 'Audiowide';
    color:white;
    font-size:40px;
}
p{
  color:white;
  text-align: center;
}
a{
  color:lightblue;
  text-decoration: none;
}
</style>
<body>
<br><br><br>
  <form method="post">
    <div class="container">
    <h1>
      <a href="index.php">
      BRACU Online Judge (BOJ)
      </a>
      </h1>
      <input type="text" placeholder="Enter Student ID" name="sid" minlength="8" maxlength="8"  required>

      <input type="text" placeholder="Enter Name" name="name" required>

      <input type="email" placeholder="Enter Email" name="email" required>

      <input type="password" placeholder="Enter Password" name="psw" minlength="5"  required>

      <input type="password" placeholder="Repeat Password" name="psw-repeat" minlength="5"  required>
      

      <div class="clearfix">
        <button type="submit" class="signupbtn" name="done"><b> Sign Up</b></button>
      </div>
      <p class="text--center">Already a member? <a href="signin.php">Sign in now</a></p>
    </div>
  </form>
  <script>
  var password = document.getElementById("psw"),
  confirm_password = document.getElementById("psw-repeat");

function validatePassword() {
  if (password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity("");
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

  </script>
</body>
</html>