<?php
include("db_connect.php");

if(isset($_REQUEST['formSubmit'])) {
$party_name="";
$click_value="";
$rand_value="";
$mobext="";
$name         = $_REQUEST['name'];
$mobile       = $_REQUEST['mobile'];
$address      = $_REQUEST['address'];
$location     = $_REQUEST['location'];
$party_name= $_REQUEST['party_name'];
$click_value=$_REQUEST['click_value'];
$rand_value=$_REQUEST['rand_value'];
//$user_id      = $_REQUEST['user_id'];
$date_today   = date("Y-m-d H:i:s");
$quantity_vals=$_REQUEST['quantity_vals'];
$mobext=$_REQUEST['mobext'];
$query = "INSERT into sales
set name = '".$name."',
mobile = '".$mobile."',
address = '".$address."',
location = '".$location."',
created_date = '".$date_today."',
quantity=".$quantity_vals.",
party_name='".$party_name."',
party_rand='".$rand_value."',
party_uid='".$click_value."'";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
if($click_value!="")
{
$query_0 = "update counter_check SET sent_flag=1 where click_value='".$click_value."' and click_unique='".$rand_value."' and party='".$party_name."' and is_deleted=0";
$result_0 = $link->query($query_0) or die("Error in the consult." . mysqli_error($link));	
if($result_0)
{
    

    
    
    
echo "done";
}
else
{
echo "notdone";		
}
}
else
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://smsapi.24x7sms.com/api_2.0/SendUnicodeSMS.aspx?APIKEY=Wy1xUO4EAe5&MobileNo=".$mobext.ltrim($mobile, '0')."&SenderID=&Message=%D8%AA%D9%85+%D8%A7%D9%84%D8%AA%D8%B3%D8%AC%D9%8A%D9%84+%D8%A8%D9%86%D8%AC%D8%A7%D8%AD+%D9%88%D8%AC%D8%A7%D8%B1%D9%8A+%D8%A5%D8%B1%D8%B3%D8%A7%D9%84+%D8%B3%D9%84%D8%B3%D9%84%D8%A9+%D9%85%D8%B9%D9%84%D9%85+%D8%A7%D9%84%D9%82%D8%B1%D8%A7%D8%A1%D8%A9+%D9%88%D8%B9%D9%84%D9%85+%D8%A8%D8%A7%D9%84%D9%82%D9%84%D9%85+%D8%A5%D9%84%D9%8A%D9%83%D9%85+%D9%85%D8%B9+%D8%B4%D8%B1%D9%83%D8%A9+%D8%A7%D9%84%D8%B4%D8%AD%D9%86+%D9%84%D9%84%D8%A3%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%3A00971569956666&ServiceName=INTERNATIONAL");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);   
echo "done";
}	
}
else
{
echo "notdone";		
}
}

?>
