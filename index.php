<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BRACU Online Judge</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="image/BOJ.png">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Barriecito' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Caesar Dressing' rel='stylesheet'>
<style>
html, 
body {
        height: 100%;
}
body {
        background: #333;
        padding-top: 5em;
        display: flex;
        justify-content: center;
}
.typewriter h1 {
  color: #fff;
  font-family: monospace;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(30, end),
    blink-caret .5s step-end infinite;
}
/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}
/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange }
}
section{
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) }
        .btn-one {
    color: #FFF;
    transition: all 0.3s;
    position: relative;
}
.wrapper{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
a{
  display: block;
  width: 200px;
  height: 40px;
  line-height: 40px;
  font-size: 18px;
  font-family: 'Audiowide';
  text-decoration: none;
  color: white;
  background:black;
  border: 2px solid black;
  letter-spacing: 2px;
  text-align: center;
  position: relative;
  transition: all .35s;
}
a span{
  position: relative;
  z-index: 2;
}
a:after{
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background: #ff003b;
  transition: all .35s;
}
a:hover{
  color: #fff;
}
a:hover:after{
  width: 100%;
}
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400);
body{
  font-family: 'Source Sans Pro', sans-serif;
  font-weight:300;
  color:#FFF;
}
section{
  text-align:center;
}
.footer #button{
	width:35px;
	height:35px;
	border: #727172 12px solid;
	border-radius:35px;
	margin:0 auto;
	position:relative;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
.footer #button:hover{
	width:35px;
	height:35px;
	border: #3A3A3A 12px solid;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	position:relative;
}
.footer {
	bottom:0;
	left:0;
	position:fixed;
    width: 100%;
    height: 2em;
    overflow:hidden;
    margin:0 auto;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	z-index:999;
}
.footer:hover {
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	height: 10em;
}
.footer #container{
	margin-top:5px;
	width:100%;
height:100%;
  position:relative;
  top:0;
  left:0;
	background: #3A3A3A;
}
.footer #cont{
  position:relative;
  top:-45px;
  right:190px;
	width:150px;
	height:auto;
	margin:0 auto;
}
.footer_center{
	width:500px;
	float:left;
  text-align:center;
}
.footer h3{
	font-family: 'Barriecito';
	font-size: 20px;
	font-weight: 10;
	margin-top:70px;
	margin-left:40px;
}
</style>
</head>
<body>
<section>
<div class="typewriter">
  <h1>BRACU Online Judge (BOJ)</h1>
</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<div class="wrapper">
  <a href="signin.php"><span>SIGN IN</span></a>
  <br>
  <a href="signup.php"><span>SIGN UP</span></a>
</div>
</section>
<div class="footer">
  <div id="button"></div>
<div id="container">
<div id="cont">
<div class="footer_center">
     <h3>Developed by Sayeem Md Abdullah<br>
        © 2019 BRACU Online Judge (BOJ)
     </h3>
</div>
</div>
</div>
</div>
</body>
</html>
