<?php 
include 'db.php';
include 'login.php';
session_destroy(); 
header('location: http://localhost/login.php?name=login');
?>
