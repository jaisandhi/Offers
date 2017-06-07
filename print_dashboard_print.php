<?php
include("classes/db_connect.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<script type="text/javascript" src="js/jquery-1.js"></script>



<script>
$(document).ready(function(){



$("body").keypress(function(e) {
    if (e.which !== 0) {
           window.print();
    }
});

});
</script>
<style>




table {
   
   	font-weight:bold;
   	page-break-before: always;
}
td
{
    font-size: calc(1vw + 1vh);
    
}
</style>
<body>

<?php
$date_data="";
$location_filter="";
$location_filter_query="";
$filter_date="";
if(isset($_REQUEST['filter_date']))
{
$filter_date=$_REQUEST['filter_date'];
$filter_date_to=$_REQUEST['filter_date_to'];
$location_filter=$_REQUEST['location'];
if($location_filter!=0 && $filter_date!="")
{
$location_filter_query=" a.sale_open_date >= '".$_REQUEST['filter_date']."' and a.sale_open_date  <= '".$_REQUEST['filter_date_to']."' and a.location=b.id_loc and a.is_deleted=0 and a.location='".$location_filter."'";
}

$query = "select a.*,b.location from sales a , location_price b where ".$location_filter_query;

$date_data="on ".$_REQUEST['filter_date']."";
$disp="display:none;";
$result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
$row_count=mysqli_num_rows($result);
$string_to="";
$init=1;
$num=0;
$i=1;
$check_count=$row_count;
$margin=10;
$f=0;
if($location_filter==2)
{
      $height="207px";
}
else
{
    $height="197px";
}
while($res=mysqli_fetch_assoc($result))
{
	$num++;
	$check_count--;
	if($init==1)
	{
		$string_to.="<table style='margin-left: 50px; height:1007px;'>";
		
	}
	if($i==1)
	{
		$string_to.="<tr style='height:".$height."'>";
		
	$f++;
	}
	if($i<=2)
	{
$string_to.= "<td style='width:397px;'>
<table>
<tr><td>Name</td><td>".$res['name']."</td></tr>
<tr><td>Address</td><td style=''>".$res['address']."</td></tr>
<tr><td>Mobile</td><td>".$res['mobile']."</td></tr>
<tr><td>Country</td><td>".$res['location']."</td></tr>
</table>
</td>";
if($check_count==0)
{

if($i==1)
{
	$string_to.="<td>
<table>
<tr><td></td><td></td></tr>
<tr><td></td><td style=''></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
</table>
</td></tr>";
}
if($init<10)
{	
if($f!=5)
{
	$r=5-$f;
for($j=0;$j<$r;$j++)
{
$string_to.="<tr style='height:".$height.";'><td></td><td></td></tr>";
}
}

$string_to.="</table>";	
}
else
{
$string_to.="</table>";	

}
}
if($i==2)
{
$string_to.= "</tr>";
$i=1;
}
else
{
$i++;	
}

}


if($init==10)
{	
$string_to.= "</table>";
$init=1;
$num=0;
$f=0;
}
else
{
$init++;	
}

}
}
echo $string_to;
?>
<!-- Modal -->
<!-- Modal -->
</body>
</html>