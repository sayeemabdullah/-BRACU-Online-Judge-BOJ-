<?php include 'connection.php'; 
$id=$_REQUEST['id'];
$sqll = "SELECT question from archive where question_id = '" . $id . "'";
$resultt = mysqli_query($connection, $sqll);
$roww = mysqli_fetch_assoc($resultt);
$question = $roww['question'];
$sqll = "SELECT problem_name from archive where question_id = '" . $id . "'";
$resultt = mysqli_query($connection, $sqll);
$roww = mysqli_fetch_assoc($resultt);
$name = $roww['problem_name'];
?>
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
        <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
</head>
<style>
textarea{
  font-family: "Courier New";
}
table , h1 , h3 , h5{
  font-family: 'Source Code Pro';
  text-align: center;
}

h4{
  font-family: 'Fredoka One';
}
body{
    background-color:#EEEEEE;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: #EEEEEE;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: #EEEEEE; 
  color: black; 
  border: 2px solid black;
}
.button2:hover {
  background-color: black;
  color: white;
}
.wrapper {
    text-align: center;
}
</style>
<body>
<div class="topbar">
        <div class="topnav-right">
            <a href="logout.php" float:left><i class="fa fa-power-off"></i></a>
            <a href="" float:left>BRACU ONLINE JUDGE (BOJ)</a>
        </div>
        <a href="compiler.php"><i class="fa fa-terminal"></i> Compiler</a>
        <a href="archive.php"><i class="fa fa-puzzle-piece"></i> Archive</a>
        <a href="submit.php"><i class="fa fa-arrow-right"></i> Submit</a>
        <a href="rank.php"><i class="fa fa-trophy"></i> Rank</a>
    </div>
<h1><?php echo $name ?></h1>
<h3>Problem ID :  <?php echo $id ?></h3>
<br><br>
<pre>
<div>
    <p id="demo"><?php echo $question?></p>
</div>
</pre>
<div class="wrapper">
<tr>
<a href="quicksubmit.php?id=<?php echo $id;?>" class="button button2"><h5>submit</h5></a>
</tr>
</div>
<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
</div>
<div class="col-sm-5">
<div class="fm">
BETA VERSION<bR>
© 2019 BRACU Online Judge (BOJ)<br>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
