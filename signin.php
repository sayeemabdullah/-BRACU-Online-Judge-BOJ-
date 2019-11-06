<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="icon" type="image/png" href="image/BOJ.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    background: #333;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius:10px;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
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
  width: 100%;
  background-color: #4CAF50;
}
    
.cbtn {
  width: 100%;
  background-color: red;
}

.tbtn {
  width: 100%;
  background-color: black;
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
  background-color: #333;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius: 15px;
  width: 80%; /* Could be more or less, depending on screen size */
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
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
h1,h2{
    text-align: center;
}
h1{
    font-family: 'Audiowide';
}
h2{
    font-family: 'Source Code Pro';
    font-size:40px;
}
</style>
<body>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
    <h1>BRACU Online Judge (BOJ)</h1>  
      <hr>
      <input type="text" placeholder="Enter Email" name="email" required>

      <input type="password" placeholder="Enter Password" name="psw" required>
      
      <div class="clearfix">
        <button type="submit" class="signupbtn"><b> Sign In</b></button>
        <button class="tbtn" onclick="window.location.href = 'compiler.php';"><i class="fa fa-ban"></i><b> Temporay Login <b><i class="fa fa-ban"></i></button>
        <button class="cbtn" onclick="window.location.href = 'index.php';"><b> Cancel<b></button>
      </div>
  </form>
</body>
</html>
