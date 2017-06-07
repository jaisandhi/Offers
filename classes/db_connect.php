<?php
include("credentials.php");
global $link;
$link = mysqli_connect($host,$dbusr,$dbpwd,$dbname) or die("Error" . mysqli_error($link));
mysqli_character_set_name($link);
mysqli_set_charset($link, "utf8");
/*if (!$link)
{
  echo "Please try later.";
}
else
{
 echo "Connected";
}*/
?>