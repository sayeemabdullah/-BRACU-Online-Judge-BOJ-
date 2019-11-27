<?php include 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
<title>BRACU Online Judge</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="image/BOJ.png">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Sigmar+One);

body {
    background: #101820FF;
    color: white;
    overflow: hidden;
}

.congrats {
    position: absolute;
    top: 140px;
    width: 550px;
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

</style>
<body>
<script>
         setTimeout(function(){
            window.location.href = 'archive.php';
         }, 3000);
      </script>
<div class="congrats">
    <h1>Sorry! 😢</h1>
    <h1>Wrong Answer.</h1>
    <h1>Please Try Again.</h1>
</div>
</body>
</html>