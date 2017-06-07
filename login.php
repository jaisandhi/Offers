<?php
session_start();
if(isset($_SESSION['login_id']))
{
session_destroy();
}

?>
<!DOCTYPE html>
<html>

<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<head>
<title>School</title>
<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="js/jquery-1.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
$("#log_but").click(function(){
username=$("#username").val();
password=$("#password").val();
if($("#username").val()=="" && $("#password").val()=="")
{
$("#add_err").html("<span style='color:red;'>Please enter username and password</span>");
$("#loader").css("display", "none");
}
else if($("#username").val()=="")
{
$("#add_err").html("<span style='color:red;'>Please enter username</span>");
$("#loader").css("display", "none");
}
else if($("#password").val()=="")
{
$("#add_err").html("<span style='color:red;'>Please enter password</span>");
$("#loader").css("display", "none");
}
else
{
$.ajax({
type: "POST",
url: "classes/checkval.php?getter_mode=validate_login&name="+username+"&pwd="+password,
success: function(html){
var response=$.trim(html);
var parsedData = JSON.parse(response);
if(parsedData.sucess==0)
{	
if(parsedData.role==2)
{
	window.location.href = "sp_dashboard.php";	
}
else if(parsedData.role==3)
{
	window.location.href = "sl_dashboard.php";	
}
else
{
window.location.href = "dashboard.php";	
}
	
}
else if(parsedData.sucess==1)
{	
    var log_id=parsedData.log_id;
	$("#change_log_id").val(log_id);
	
	document.change_pwd.submit();
	//window.location.href = "change_password.php?log_id="+log_id;
}
else
{
$("#add_err").html("<span style='color:red;'>Wrong username or password</span>");
$("#loader").css("display", "none");
}
},
beforeSend:function()
{
$("#loader").css("display", "block");
}
});
}
return false;
});

$("#check_but").click(function(){
username=$("#username").val();
password=$("#password").val();
if($("#username").val()=="" && $("#password").val()=="")
{
$("#add_err").html("<span style='color:red;'>Please enter username and password</span>");
$("#loader").css("display", "none");
}
else if($("#username").val()=="")
{
$("#add_err").html("<span style='color:red;'>Please enter username</span>");
$("#loader").css("display", "none");
}
else if($("#password").val()=="")
{
$("#add_err").html("<span style='color:red;'>Please enter password</span>");
$("#loader").css("display", "none");
}
else
{
$.ajax({
type: "POST",
url: "classes/checkval.php?name="+username+"&pwd="+password,
success: function(html){
var response=$.trim(html);
var parsedData = JSON.parse(response);
if(parsedData.sucess==0)
{	

	window.location.href = "checkin_form.php";
}
else if(parsedData.sucess==1)
{	
    var log_id=parsedData.log_id;
	$("#change_log_id").val(log_id);
	
	document.change_pwd.submit();
	//window.location.href = "change_password.php?log_id="+log_id;
}
else
{
$("#add_err").html("<span style='color:red;'>Wrong username or password</span>");
$("#loader").css("display", "none");
}
},
beforeSend:function()
{
$("#loader").css("display", "block");
}
});
}
return false;
});


}); 
</script>
<style>
body {
background-color: #4f5b69 !important;
}
.backred
{
background: -moz-linear-gradient(left,  #970010 0%, #ea3f42 30%, #ea3f42 65%, #970010 100%) !important; /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#970010', endColorstr='#970010',GradientType=1 
color: #fff !important;
}
.headback
{

//background-image: url("img/maxresdefault.jpg") !important;
background-image: url("images/body_in.jpg") !important;
background-position: 38% 73%;
	background-repeat: no-repeat !important;
}
.headback2
{

//background-image: url("img/maxresdefault.jpg") !important;
background-image: url("images/body_in.jpg") !important;
background-position: 39% 73%;
	background-repeat: no-repeat !important;
}
</style>
</head>
<body>
	    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading backred" style="color: white !important;">
					<center><strong>Sign in to continue</strong></center>
					</div>
					<div class="panel-body">
						<form>
							<fieldset>
								<div class="row">
									<div class="center-block">
										<center><img class="profile-img" src="images/eqraa_logo.png" alt="" style="width: 20%;"></center>
										<br>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user" style="color:#4f5b69;"></i>
												</span> 
												<input class="form-control" placeholder="Username" id="username" name="loginname" autofocus="" type="text" required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock" style="color:#4f5b69;"></i>
												</span>
												<input type="password" class="form-control" placeholder="Password" id="password" name="password" value="" required>
											</div>
										</div>
										<div class="form-group">
											<div id="add_err">
											</div>
										</div>
											<div class="form-group">
											<div id="loader" style="display:none;"><img src="img/ajax-loader.gif" /><span style="color:#357ebd;">Validating...</span>
											</div>
										</div>
										<div class="form-group">
											<input class="btn btn-lg btn-primary btn-block center-block login backred" value="Sign in" type="submit" id="log_but" style="width:50%;">
											<br>
										<!--<input class="btn btn-lg btn-primary btn-block center-block login" value="Check-in" id="check_but" style="width:50%;">-->
										</div>
									</div>
								</div>
							</fieldset>
					</form>
				
					</div>
					<!--<div class="panel-footer ">
						Don't have an account! <a href="#" onclick=""> Sign Up Here </a>
					</div>-->
                </div>
			</div>
		</div>
	</div>
	
<form name="change_pwd" method="post" action="change_password.php">
<input type="hidden" id="change_log_id" name="log_id" value="login_id">
</form>

</body></html>