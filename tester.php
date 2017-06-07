<?php
include("classes/db_connect.php");
$query_0 = "update counter_check SET sent_flag=3 where is_deleted=0";
$result_0 = $link->query($query_0) or die("Error in the consult." . mysqli_error($link));	
?>