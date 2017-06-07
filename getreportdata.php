<?php
include("classes/db_connect.php");

$date_data="";
$location_filter="";
$location_filter_query="";
$filter_date="";
$filter_date1="";
$user = "";
$val="";

if(isset($_REQUEST['user'])){
    global $link;
    $user = $_REQUEST['user'];
    $query_1 = "select `first_name`, `last_name`, `user_name`,`log_id` FROM `login` WHERE  role=3 and  location=$user and is_deleted=0";

    $result = $link->query($query_1) or die("Error in the login." . mysqli_error($link));
    $user_results = array();
    while($res=mysqli_fetch_array($result))    {
        array_push($user_results, $res);
    }
    echo json_encode($user_results, JSON_NUMERIC_CHECK);
}else{
    if(isset($_REQUEST['filter_month']) && isset($_REQUEST['filter_year']))
    {
        $filter_date=$_REQUEST['filter_month'];
        $filter_date1=$_REQUEST['filter_year'];
        $location_filter=$_REQUEST['location'];
        if($location_filter!=0 && $filter_date=="" && $filter_date1=="")
        {
            $query = "select a.location,count(*) as counts from sales b, location_price a where b.sale_stat!=9
 and b.created_date like '%".date("Y")."%' and b.location=a.id_loc and b.location=".$location_filter." and b.is_deleted=0";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter==0 && $filter_date!="" && $filter_date1=="")
        {
            $query="select a.location,count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";

            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter==0 && $filter_date!="" && $filter_date1!="")
        {
            $query="select a.location,count(*) as counts from sales b, location_price a where Date(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter==0 && $filter_date=="" && $filter_date1!="")
        {
            $query="select a.location,count(*) as counts from sales b, location_price a where Date(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts from sales b, location_price a where Year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts from sales b, location_price a where Year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts from sales b, location_price a where Year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts from sales b, location_price a where Year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts from sales b, location_price a where Year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts from sales b, location_price a where Year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts from sales b, location_price a where Year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";

            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $filter_date!="" && $filter_date1!=""){
            $query="select a.location,count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location = $location_filter";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $filter_date!="" && $filter_date1==""){
            $query="select a.location,count(*) as counts from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location = $location_filter";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $filter_date=="" && $filter_date1!=""){
            $query="select a.location,count(*) as counts from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location = $location_filter";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter==0 && $filter_date=="" && $filter_date1==""){

            $query = "select a.location,count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10
";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
    }
    else
    {
        $query = "select a.location,count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10
";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
    $sum_val=0;
    $init_i=0;
    $locat="";
    $data_points = array();
    while($res=mysqli_fetch_array($result))
    {
        $point = array("label" => $res['location'] , "y" => $res['counts']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}



?>