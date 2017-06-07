<?php
include("db_connect.php");
$mode=$_REQUEST['mode'];
if($mode=="order_update")
{
$order_id= $_REQUEST['order_id'];
$type= $_REQUEST['type'];
$date_today   = date("Y-m-d H:i:s");
if($type=="open")
{
$query = "update sales set sale_stat=1, sale_open_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}
else if($type=="hide")
{
$query = "update sales set hide_flag=1, sale_hide_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}
else if($type=="fake")
{
$query = "update sales set sale_stat=9, sale_open_date='".$date_today."', is_deleted=1 where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}

}
else if($type=="delivery")
{
$query = "update sales set sale_stat=2, sale_delivery_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}

}
else if($type=="success_delivery")
{
$query = "update sales set sale_stat=3, sale_success_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}

}
else if($type=="delivery_cancel")
{
$query = "update sales set sale_stat=4, sale_cancel_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}

}
else if($type=="move_all_to_open")
{
$query = "update sales set sale_stat=1, sale_open_date='".$date_today."' where sale_stat=0 and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}
else if($type=="move_all_to_courier")
{
$query = "update sales set sale_stat=2, sale_delivery_date='".$date_today."' where sale_stat=1 and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}
else if($type=="move_all_to_delivery")
{
$query = "update sales set sale_stat=3, sale_success_date='".$date_today."' where sale_stat=2 and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}
else if($type=="assign")
{
$selectopt="";
if(isset($_REQUEST['selectopt']))
{
$selectopt=$_REQUEST['selectopt'];	
}

$query = "update sales set assign_id=".$selectopt.", sale_assign_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}
else if($type=="assign_multiple")
{
	$selectopt=$_REQUEST['selectopt'];	
	$data = json_decode(file_get_contents('php://input'), true);
	$data_to_base="";
		foreach($data as $item)
	{
		$data_to_base.=$item.",";
	}
	
	$query = "update sales set assign_id=".$selectopt.", sale_assign_date='".$date_today."' where sales_id in(".rtrim($data_to_base,",").") and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done" ;	
}
else
{
echo "notdone";		
}
}
else if($type=="successdeliver")
{
$query = "update sales set sale_deliver=1, sale_delivery_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}
else if($type=="canceldelivery")
{
$query = "update sales set sale_deliver=2, sale_cancel_date='".$date_today."' where sales_id=".$order_id." and is_deleted=0";
$result = $link->query($query) or die("Error in the sales." . mysqli_error($link));
if($result)
{
echo "done";	
}
else
{
echo "notdone";		
}
}

}

?>
