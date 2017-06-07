<?php
session_start();
include("db_connect.php");
$mode_check=$_REQUEST["getter_mode"];
if($mode_check=="validate_login")
{
$inrow=array();
$pwd_exp="";
$username=$_REQUEST["name"];
$password=$_REQUEST["pwd"];
$back_log_id="";
$query = "SELECT first_name, last_name, user_name, log_id, role, supervisor_id_1, supervisor_id_2, supervisor_id_3,pwd_exp,img_url,supervisor_level,user_name_ticket,user_pwd_ticket,wemail FROM login where user_name='".$username."' and (pass_word=md5('".$password."') or dev_pwd=md5('".$password."'))and is_deleted=0";
$row = $link->query($query) or die("Error in the sales." . mysqli_error($link));
$result_login=mysqli_num_rows($row);
if($result_login>0)
{
	$usr_p1="";
	$usr_fname_p1="";
	$usr_lname_p1="";
	$usr_log_p1="";
	$usr_role_p1="";
	$supervisor_id_1="";
	$supervisor_id_2="";
	$supervisor_id_3="";
	$img_url="";
	$supervisor_level="";
	$user_name_ticket="";
	$user_pwd_ticket="";
	$wemail="";

foreach($row as $res)
{
$pwd_exp=$res['pwd_exp'];	
$back_log_id=$res['log_id'];
if($pwd_exp=='1')
{
$inrow['first_name']=$res['first_name'];
$inrow['last_name']=$res['last_name'];
$inrow['last_name']=$res['last_name'];
$inrow['log_id']=$res['log_id'];
$inrow['role']=$res['role'];
$inrow['supervisor_id_1']=$res['supervisor_id_1'];
$inrow['supervisor_id_1']=$res['supervisor_id_2'];
$inrow['supervisor_id_3']=$res['supervisor_id_3'];
$inrow['user_name_ticket']=$res['user_name_ticket'];
$inrow['user_pname_ticket']=$res['user_name_ticket'];
$inrow['user_pwd_ticket']=$res['user_pwd_ticket'];
$usr_fname_p1=$res['first_name'];
$usr_lname_p1=$res['last_name'];
$usr_p1=$res['user_name'];
$usr_log_p1=$res['log_id'];
$usr_role_p1=$res['role'];
$supervisor_id_1=$res['supervisor_id_1'];
$supervisor_id_2=$res['supervisor_id_2'];
$supervisor_id_3=$res['supervisor_id_3'];
$img_url=$res['img_url'];
$supervisor_level=$res['supervisor_level'];
$user_name_ticket=$res['user_name_ticket'];
$user_pwd_ticket=$res['user_pwd_ticket'];
$wemail=$res['wemail'];
}
}
if($pwd_exp=='1')
{
$_SESSION["first_name"]=$usr_fname_p1;
$_SESSION["last_name"]=$usr_lname_p1;
$_SESSION["user_name"]=$usr_p1;
$_SESSION["login_id"]=$usr_log_p1;
$_SESSION["role"]=$usr_role_p1;
$_SESSION["supervisor_id_1"]=$supervisor_id_1;
$_SESSION["supervisor_id_2"]=$supervisor_id_2;
$_SESSION["supervisor_id_3"]=$supervisor_id_3;
$_SESSION["img_url"]=$img_url;
$_SESSION["supervisor_level"]=$supervisor_level;
$_SESSION["user_name_ticket"]=$user_name_ticket;
$_SESSION["user_pname_ticket"]=$user_pwd_ticket;
$_SESSION["wemail"]=$wemail;
$statement_1 ="update login set available='1' where log_id=".$usr_log_p1." and is_deleted=0";
$statement_2 = $link->query($statement_1) or die("Error in the sales." . mysqli_error($link));
if($statement_2)
{
$_SESSION['set_timer']=time();
$inrow['sucess']=0;
echo json_encode($inrow);	
}
else
{
$inrow['sucess']=2;
echo json_encode($inrow);
}
}
else if($pwd_exp=='0')
{
$_SESSION['set_timer']=time();
$inrow['sucess']=1;
$inrow['log_id']=$back_log_id;
echo json_encode($inrow);
}
else 
{
$inrow['sucess']=2;
echo json_encode($inrow);
}
}
else 
{
$inrow['sucess']=2;
echo json_encode($inrow);
}
}
else if($mode_check=="update_password")
{
$inrow=array();
$pwd_exp="";
$login_id=$_REQUEST["user_name"];
$update_pwd=$_REQUEST["confirmpassword"];
$statement_3 = "update login set pass_word=".md5($update_pwd)." ,pwd_exp='1' where log_id=".$login_id." and is_deleted=0";
$statement_3_0 = $link->query($statement_3) or die("Error in the sales." . mysqli_error($link));
$result_len=mysqli_num_rows($statement_3_0);
if($result_len>0)
{
$inrow['sucess']=0;
echo json_encode($inrow); 
}
else 
{
}
}
else if($mode_check=="compare_password")
{
$inrow=array();
$pwd_exp="";
$login_id=$_REQUEST["user_name"];
$old_password=$_REQUEST["old_password"];
$statement_4 = "select * from login  where log_id=".$login_id." and pass_word=".md5($old_password)." and is_deleted=0";
$result_len=mysqli_num_rows($statement_4_0);
$statement_4_0 = $link->query($statement_4) or die("Error in the sales." . mysqli_error($link));
$result_len=mysqli_num_rows($statement_4_0);
if($result_len>0)
{
$inrow['sucess']=0;	
}	
else
{
$inrow['sucess']=1;
}
echo json_encode($inrow); 
}
else if($mode_check=="check_mobile")
{
$inrow="";
$mob_right="";
$mob_left="";
$mphone_lead=$_REQUEST["mphone_lead"];
$mob_left=$mphone_lead;
if(starts_with($mphone_lead, "0"))
{
$mob_left=ltrim($mphone_lead, '0');
$mob_right=$mphone_lead;
}
else
{
$mob_right="0".$mphone_lead;	
}
$statement_4 = "select * from sales where mobile ='".$mob_left."' or mobile ='".$mob_right."' and is_deleted=0";
$statement_4_0 = $link->query($statement_4) or die("Error in the sales." . mysqli_error($link));
$result_len=mysqli_num_rows($statement_4_0);
if($result_len>0)
{
$inrow="already";	
}	
else
{
$inrow="emptys";
}
echo $inrow; 
}



function starts_with($s, $prefix){
    // returns a bool
	if($s[0]=="0")
	{
		return true;
	}
	else
	{
		return false;
	}
    
}





?>