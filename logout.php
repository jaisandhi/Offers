<?php
session_start();
include("classes/db_connect.php");
$log_id=$_SESSION['login_id'];
$query = "update login set available='0' where log_id='".$log_id."' and is_deleted=0"; 
$result = $link->query($query)or die("Error in the consult." . mysqli_error($link));	
session_destroy();
header('Location: login.php');
?>