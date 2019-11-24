<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bracuonlinejudge(boj)";
// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
session_start();
?>