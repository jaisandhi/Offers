<?php
include("classes/db_connect.php");

$date_data="";
$location_filter="";
$location_filter_query="";
$filter_date="";
$filter_date1="";
$val="";

if(isset($_REQUEST['filter_month']) && isset($_REQUEST['filter_year']))
{
    $filter_date=$_REQUEST['filter_month'];
    $filter_date1=$_REQUEST['filter_year'];
    $location_filter=$_REQUEST['location'];

    if($location_filter!=0 && $filter_date=="" && $filter_date1=="")
    {
        $query = "select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where b.sale_stat!=9
 and b.created_date like '%".date("Y")."%' and b.location=a.id_loc and b.location = $location_filter and b.is_deleted=0";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
    else if($location_filter==0 && $filter_date!="" && $filter_date1=="")
    {
        $query="select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";

        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }

    else if($location_filter==0 && $filter_date!="" && $filter_date1!="")
    {
        $query="select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where Date(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
    else if($location_filter==0 && $filter_date=="" && $filter_date1!="")
    {
        $query="select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where Date(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
union
select a.location, count(*) as counts ,count(*)*a.price_all AS 'amount'from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
union
select a.location, count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
    else if($location_filter!=0 && $filter_date!="" && $filter_date1!=""){
        $query="select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and  year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location = $location_filter";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
    else if($location_filter!=0 && $filter_date!="" && $filter_date1==""){
        $query="select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where MONTH(b.created_date) = $filter_date and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location = $location_filter";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
    else if($location_filter!=0 && $filter_date=="" && $filter_date1!=""){
        $query="select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where year(b.created_date) = $filter_date1 and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location = $location_filter";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
    else if($location_filter==0 && $filter_date=="" && $filter_date1==""){
        $query = "select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
                union
                select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
                union
                select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
                union
                select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
                union
                select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
                union
                select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
                union
                select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
                union
                select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%".date("Y")."%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }
}
else {
    $query = "select a.location,count(*) as counts,count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and  b.sale_stat!=9 and b.location=1
            union
            select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=2
            union
            select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=3
            union
            select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=4
            union
            select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=5
            union
            select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=6
            union
            select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=7
            union
            select a.location, count(*) as counts, count(*)*a.price_all AS 'amount' from sales b, location_price a where b.created_date like '%" . date("Y") . "%' and a.id_loc=b.location and b.is_deleted=0 and b.sale_stat!=9 and b.location=10";
    $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
}
    $sum_val=0;
$init_i=0;
$locat="";
$data_points = array();
while($res=mysqli_fetch_array($result))
{
    $point = array("label" => $res['location'] , "y" => $res['amount']);
    array_push($data_points, $point);
}

echo json_encode($data_points, JSON_NUMERIC_CHECK);

?>