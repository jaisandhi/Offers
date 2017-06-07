<?php
include("classes/db_connect.php");
$party="";
$party_url="";
$click_value="";
$click_unique="";
$click_unique_id="";
$query_0 = "SELECT a . * , b.party_url FROM counter_check a, party_values b WHERE a.party = b.party_name AND a.sent_flag =1 AND a.click_value !='' AND a.pick_flag =0 ORDER BY a.click_id ASC LIMIT 1";
$result_0 = $link->query($query_0) or die("Error in the consult." . mysqli_error($link));	
$random_number=''; // set up a blank string
$check_number=mysqli_num_rows($result_0);
if($check_number>0)
{
while($res=mysqli_fetch_assoc($result_0))
{
$click_unique_id=$res["click_id"];
	
$party_url=$res["party_url"];
$click_value=$res["click_value"];
$click_unique=$res["click_unique"];
$party=$res["party"];
$query_1 = "update counter_check SET pick_flag=1 where click_unique='".$click_unique."' and click_value='".$click_value."' and party='".$party."' and is_deleted=0";
$result_1 = $link->query($query_1) or die("Error in the consult." . mysqli_error($link));
}
$result_ans=redirect($party_url.$click_value,$click_unique,$click_value,$party);


}
function redirect($args,$arg1,$arg2,$arg3)
{
	global $link;
/*
 * PHP Proxy
 * Responds to both HTTP GET and POST requests
 * Author: Abdul Qabiz
 * Created On: March 31st, 2006
 * Last Modified: Feb 22, 2015
 */
// Get the url of to be proxied
// Is it a POST or a GET?
$url = $args;

//Start the Curl session
$session = curl_init($url);
// If it's a POST, put the POST data in the body

// Don't return HTTP headers. Do return the contents of the call
curl_setopt($session, CURLOPT_HEADER,  false);
curl_setopt($session, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
// Make the call
$response = curl_exec($session);

$query_2 = "update counter_check SET sent_flag=2, sent_url='".$args."' where click_unique='".$arg1."' and click_value='".$arg2."' and party='".$arg3."' and is_deleted=0";
$result_2 = $link->query($query_2) or die("Error in the consult." . mysqli_error($link));	
curl_close($session);

}


?>