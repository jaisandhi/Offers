<?php
session_start();
include("classes/db_connect.php");
if (!isset($_SESSION["login_id"])) 
{
header('Location: login.php');
}
$role=$_SESSION["role"];
$supervisor_level=$_SESSION["supervisor_level"];
$glb_lead_type="";
$login_id=$_SESSION["login_id"];
$name_owe=$_SESSION['first_name']." ".$_SESSION['last_name'];
$supervisor_id_1=$_SESSION["supervisor_id_1"];
$supervisor_id_2=$_SESSION["supervisor_id_2"];
$supervisor_id_3=$_SESSION["supervisor_id_3"];
$supervisor_level=$_SESSION["supervisor_level"];
$wemail=$_SESSION["wemail"];
$role_head=$_SESSION['role'];
$img_url=$_SESSION['img_url'];
$check_var=1;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.css"  rel="stylesheet">
<link href="css/fontawesome.css"  rel="stylesheet">
<link href="css/jquery-ui.css"  rel="stylesheet">
<script src="js/jquery-1.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<style>
body {
    padding-left: 20px;
    padding-right: 20px;
}

.navbar-default .navbar-nav > li > a {
    color: #fff !important;
	
}
.navbar-default .navbar-nav > li > .hc1
{
background: #ff8110 !important; /* Old browsers */
background: -moz-linear-gradient(top,  #ff8110 0%, #ffc6de 0%, #ec3d82 100%) !important; /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ff8110 0%,#ffc6de 0%,#ec3d82 100%) !important; /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ff8110 0%,#ffc6de 0%,#ec3d82 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8110', endColorstr='#ec3d82',GradientType=0 ) !important; /* IE6-9 */
}
.navbar-default .navbar-nav > li > .hc2
{
background: #ff8110; /* Old browsers */
background: -moz-linear-gradient(top,  #ff8110 0%, #95d0db 0%, #15bddb 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ff8110 0%,#95d0db 0%,#15bddb 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ff8110 0%,#95d0db 0%,#15bddb 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8110', endColorstr='#15bddb',GradientType=0 ); /* IE6-9 */

}
.navbar-default .navbar-nav > li > .hc3
{
background: #ff8110; /* Old browsers */
background: -moz-linear-gradient(top,  #ff8110 0%, #e9ff87 0%, #a0dd1a 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ff8110 0%,#e9ff87 0%,#a0dd1a 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ff8110 0%,#e9ff87 0%,#a0dd1a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8110', endColorstr='#a0dd1a',GradientType=0 ); /* IE6-9 */

}
.navbar-default .navbar-nav > li > .hc4
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ff8110+0,e9def7+0,ac6ca8+100 */
background: #ff8110; /* Old browsers */
background: -moz-linear-gradient(top,  #ff8110 0%, #e9def7 0%, #ac6ca8 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ff8110 0%,#e9def7 0%,#ac6ca8 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ff8110 0%,#e9def7 0%,#ac6ca8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8110', endColorstr='#ac6ca8',GradientType=0 ); /* IE6-9 */

}
.navbar {
    min-height: 40px;
	background: #970010; /* Old browsers */
background: -moz-linear-gradient(left,  #970010 0%, #ea3f42 30%, #ea3f42 65%, #970010 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#970010', endColorstr='#970010',GradientType=1 
color:#fff !important;
}
.backredbut
{

}
.upper_back_class
{
	/*
background-image: url("images/cartoon_kid.png");
 
    background-repeat: no-repeat;
    background-size: 100% 100%
*/
}
.back_class
{

}

@media only screen and (min-width : 100px) and (max-width : 700px) 
{

.img-responsive
{
	width:50%;
}
.navbar {
    margin-bottom: -11px !important;
}
.back_class
{
	margin-top:-10px;
}
}

</style>
<script>
function redirect_liveorders()
{
	window.location.href='dashboard.php';
}
function redirect_print_open()
{
	window.location.href='print_dashboard.php';
}
function redirect_liveorders_sp()
{
	window.location.href='sp_dashboard.php';
}
function redirect_openorders()
{
	window.location.href='get_all_orders.php';
}
function redirect_indelivery()
{
	window.location.href='get_delivery_status.php';
}
function redirect_cancel_delivery() 
{
	window.location.href='get_all_cancel_orders.php';
}
function redirect_success_indelivery()
{
	window.location.href='get_all_success_orders.php';
}
function logout_fun()
{
	window.location.href="logout.php?user=sale";
}
function redirect_assignorders()
{
	window.location.href="assign_orders.php";
}
function redirect_openorders_sl() 
{
	window.location.href="sl_dashboard.php";
}
function redirect_print_success_sl()
{
	window.location.href="get_sl_success_orders.php";
}
function redirect_print_cancel_sl()
{
	window.location.href="get_sl_cancelled_orders.php";
}
function redirect_report()
{
window.location.href="get_reports.php";
}
</script>
 </head>

<body class="body_style" style="">

<div class="container" style="margin-top:20px;">
<div class="row">
<div class="panel panel-default">
<div class="panel-heading upper_back_class" style="background-color:#fff !important; background-image: url('images/hm_114.jpg');">
<input type="button" style="float:right; color: white !important; background: -moz-linear-gradient(left,  #970010 0%, #ea3f42 30%, #ea3f42 65%, #970010 100%) !important; /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#970010', endColorstr='#970010',GradientType=1;
"  onclick="logout_fun()" value="Log out">
<a href="dashboard.php">
<img src="images/eqraa_logo.png" class="img-responsive"></a>
	<center><div id="headcount" style="font-size:42px; color:#E0373C;"></div></center>
<nav class="navbar navbar-default" style="">
  <div class="container-fluid" style="">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <?php
if($role_head=="1")
{
?>
         <li><a class="hc1" href="javascript:void(0);"  onclick="redirect_liveorders()">Live Order</a></li>
		      <li><a class="hc2" href="javascript:void(0);"  onclick="redirect_assignorders()">Assign Order</a></li>
      <li><a class="hc3" href="javascript:void(0);"  onclick="redirect_openorders()">Open Order</a></li>
	    <li><a class="hc4" href="javascript:void(0);"  onclick="redirect_report()">Reports</a></li>
		<li><a href="javascript:void(0);" class="hc1" onclick="redirect_print_open()">Print Order</a></li>
   <!--   <li><a href="javascript:void(0);" onclick="redirect_indelivery()">In courier</a></li>
      <li><a href="javascript:void(0);" onclick="redirect_success_indelivery()">In Delivery</a></li>
	   <li><a href="javascript:void(0);" onclick="redirect_cancel_delivery()">Cancelled Delivery</a></li>
<li><a href="javascript:void(0);" onclick="redirect_print_open()">Print Order</a></li>-->
          </ul>
        </li>
		<?php
}
else if($role_head=="2")
{
?>
         <li><a class="hc1" href="javascript:void(0);" onclick="redirect_liveorders_sp()">Live Order</a></li>
      <li><a class="hc2" href="javascript:void(0);"  onclick="redirect_openorders()">Open Order</a></li>
	  <li><a class="hc3" href="javascript:void(0);" onclick="redirect_print_open()">Print Order</a></li>
<?php
}
else if($role_head=="3")
{
?>

      <li><a class="hc1" class="hc1" href="javascript:void(0);" onclick="redirect_openorders_sl()">Open Order</a></li>
	  <li><a class="hc2" href="javascript:void(0);" onclick="redirect_print_success_sl()">Success Order</a></li>
	  <li><a class="hc3" href="javascript:void(0);" onclick="redirect_print_cancel_sl()">Cancel Order</a></li>
<?php
}
?>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>	
