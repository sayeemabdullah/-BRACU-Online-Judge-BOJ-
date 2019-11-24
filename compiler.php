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
<style>
textarea{
  font-family: "Courier New";
}
h1{
  font-family: 'Source Code Pro';
}
h4{
  font-family: 'Fredoka One';
}
</style>
</head>
<body>
<div class="topbar">
        <div class="topnav-right">
            <a href="logout.php" float:left><i class="fa fa-power-off"></i></a>
            <a href="index.php" float:left>BRACU ONLINE JUDGE (BOJ)</a>
        </div>
        <a href="compiler.php"><i class="fa fa-terminal"></i> Compiler</a>
        <a href="archive.php"><i class="fa fa-puzzle-piece"></i> Archive</a>
        <a href="submit.php"><i class="fa fa-arrow-right"></i> Submit</a>
        <a href="rank.php"><i class="fa fa-trophy"></i> Rank</a>
    </div>
<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang"><h4>Language :</h4></label>
<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>
</select><br><br>
<label for="ta"><h4>SOURCE CODE :</h4></label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in"><h4>Enter Sample Input :</h4></label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success btn-lg btn-block" value="Run Code"><br><br><br>
</form>
<script type="text/javascript">
  
  $(document).ready(function(){
     $("#st").click(function(){
           $("#div").html("Finger Crossed...loading");
     });
  });
</script>
<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();
      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

            // locate the div with #result and fill it with returned data from process.php
            $('#div').html(result);
            }
        });
    });
});
</script>
<label for="out"><h4>Output :</h4></label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>
<a href="compiler.php" class="btn btn-danger btn-lg btn-block" role="button">Refresh</a>
<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->
</div>
</div>
<div class="col-sm-4">
  
</div>
</div>
</div>
<br><br><br>
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
