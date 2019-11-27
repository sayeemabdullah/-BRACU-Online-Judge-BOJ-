<?php include 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
<title>BRACU Online Judge</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="image/BOJ.png">
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Sigmar+One);

body {
    background: #101820FF;
    color: #F2AA4CFF;
    overflow: hidden;
}

.congrats {
    width: 700px;
    height: 100px;
    padding: 20px 10px;
    text-align: center;
    margin: 0 auto;
    left: 0;
    right: 0;
}

h1 {
    
    font-size: 50px;
    font-family: 'Sigmar One', cursive;
    text-align: center;
    width: 100%;
}

h2{
    font-size: 100px;
}

</style>
<body>
<script>
         setTimeout(function(){
            window.location.href = 'rank.php';
         }, 3000);
      </script>
<div class="congrats">
    <h2>🏆<h2>
    <h1>Congratulations! 🎉</h1>
    <h1>You Have Successfully Solved The Problem.</h1>
</div>
</body>
</html>