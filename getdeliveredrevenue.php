<?php
include("classes/db_connect.php");

$date_data="";
$location_filter="";
$location_filter_query="";
$user_location_filter="";
$filter_date="";
$filter_date1="";
$val="";


    if(isset($_REQUEST['filter_month']) && isset($_REQUEST['filter_year']) && isset($_REQUEST['user_loc_filter']))
    {
        $filter_date=$_REQUEST['filter_month'];
        $filter_date1=$_REQUEST['filter_year'];
        $location_filter=$_REQUEST['location'];
        $user_location_filter=$_REQUEST['user_loc_filter'];

        if($location_filter!=0 && $user_location_filter==0 && $filter_date=="" && $filter_date1=="")
        {
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND 
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND
                u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $user_location_filter!=0  && $filter_date=="" && $filter_date1=="")
        {
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND 
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND u.log_id=$user_location_filter AND
                u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter==0 && $user_location_filter==0 && $filter_date!="" && $filter_date1=="")
        {
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND 
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND MONTH(p.created_date) = $filter_date
                 AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter==0 && $user_location_filter==0 && $filter_date!="" && $filter_date1!="")
        {
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND MONTH(p.created_date) = $filter_date AND  Year(p.created_date) = $filter_date1
                 AND u.is_deleted=0 GROUP BY u.log_id";

            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter==0 && $user_location_filter==0 && $filter_date=="" && $filter_date1!="")
        {
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND Year(p.created_date) = $filter_date1
                 AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $user_location_filter==0 && $filter_date!="" && $filter_date1!=""){
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND 
                MONTH(p.created_date) = $filter_date AND  Year(p.created_date) = $filter_date1 AND u.is_deleted=0 GROUP BY u.log_id";

            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $user_location_filter==0 && $filter_date!="" && $filter_date1==""){
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND 
                MONTH(p.created_date) = $filter_date  AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $user_location_filter==0 && $filter_date=="" && $filter_date1!=""){
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND 
                Year(p.created_date) = $filter_date1 AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
        else if($location_filter!=0 && $user_location_filter!=0 && $filter_date!="" && $filter_date1!=""){
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND MONTH(p.created_date) = $filter_date AND
                Year(p.created_date) = $filter_date1 AND u.log_id=$user_location_filter AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }

        else if($location_filter!=0 && $user_location_filter!=0 && $filter_date=="" && $filter_date1!=""){
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                  l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND
                Year(p.created_date) = $filter_date1 AND u.log_id=$user_location_filter AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }

        else if($location_filter!=0 && $user_location_filter!=0 && $filter_date!="" && $filter_date1==""){
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
                sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND
                l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.location=$location_filter AND
                 MONTH(p.created_date) = $filter_date AND u.log_id=$user_location_filter AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }

        else if($location_filter==0 && $user_location_filter==0 && $filter_date=="" && $filter_date1==""){
            $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
            sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND 
            l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.is_deleted=0 GROUP BY u.log_id";
            $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
        }
    }
    else
    {
        $query = "SELECT u.user_name,l.location as location,count(p.assign_id) as assign_orders,sum(p.sale_stat = 3) as delivered,
            sum(p.sale_stat = 4) as canceled,sum(p.sale_stat = 3)*l.price_all AS 'amount' FROM login u JOIN sales p JOIN location_price l WHERE l.id_loc = u.location AND 
            l.id_loc = p.location AND p.assign_id = u.log_id AND u.role=3 AND u.is_deleted=0 GROUP BY u.log_id";
        $result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
    }


$sum_val=0;
$init_i=0;
$locat="";
$data_points = array();
$data_points1 = array();
$data_points2 = array();

while($res=mysqli_fetch_array($result))
{
    $point = array("label" => $res['user_name'] , "y" => $res['assign_orders']);
    $point1 = array("label" => $res['user_name'] , "y" => $res['delivered']);
    $point2 = array("label" => $res['user_name'] , "y" => $res['canceled']);
    array_push($data_points, $point);
    array_push($data_points1, $point1);
    array_push($data_points2, $point2);
}
$query = array(
    'assign' => $data_points,
    'delivered' => $data_points1,
    'canceled' => $data_points2
);
echo json_encode($query, JSON_NUMERIC_CHECK);



?>