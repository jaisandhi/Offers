<?php
include("classes/db_connect.php");
include("header.php");
$disp="";
if($role_head=="2")
{
    $disp="display:none;";
}
?>

<script>
    $(document).ready(function(){
        $("a[href='#top']").click(function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
        $("a[href='#bottom']").click(function() {
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
            return false;
        });

    });
    function get_data()
    {
        var a=$("#get_data_month").val();
        var b=$("#get_data_year").val();
        var c=$("#location_filter").val();
        var d=$("#user_filter").val();
        window.location.href = "delivered_revenue.php?type=delivered&filter_month="+a+"&filter_year="+b+"&location="+c+"&user_loc_filter="+d;
    }
</script>
<style>
    .canvasjs-chart-credit {
        display: none;
    }
    .MonthDatePicker .ui-datepicker-year
    {
        display:none;
    }
    .YearDatePicker .ui-datepicker-month
    {
        display:none;
    }


    .hide-calendar .ui-datepicker-calendar
    {
        display:none!important;
        visibility:hidden!important
    }

    .fa
    {
        font-size:32px !important;
        margin-left:-10px;
    }
    .backred
    {
        background: -moz-linear-gradient(left,  #970010 0%, #ea3f42 30%, #ea3f42 65%, #970010 100%) !important; /* FF3.6-15 */
        background: -webkit-linear-gradient(left,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#970010', endColorstr='#970010',GradientType=1
        color: #fff !important;
    }
    .marquee_widths
    {
        width:150px;
    }
    @media only screen and (min-width : 100px) and (max-width : 700px)
    {
        .marquee_widths
        {
            width:120px;
        }
    }

    .bt_types_2
    {
        background: url('images/wood_back2.jpg') no-repeat;
        height: 36px;
        padding-top: 6px;
        width: 200px;
    }
    .bt_types_2:hover
    {
        background: url('images/wood_back2.jpg') no-repeat;
    }
    .strip_image
    {
        background-image:url('images/Wooden3.jpg');
    }
    .back_image
    {

        background: url('images/dreamstime_m_41762328-min.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height:420px;
        background-position:-4px -415px ;
    }
    .inner_imgs
    {
        margin-top:-15px;
    }
    .buy_img
    {
        background: url('images/wood_back2.jpg') no-repeat;
        width:30%;
    }
    .headtab
    {
        background-color: #ffffff;
        background-image: url("images/imageedit_1_5066986385.png"), url("images/imageedit_3_4141628663.png"), url("images/card_body_2.jpg");
        background-position: left center, right center;
        background-repeat: no-repeat, no-repeat, repeat;
        background-size: 10% auto, 25% auto, 10% auto;
    }
    .novisa
    {
        width:5%;
    }
    .header_up
    {
        color:#005E7E; height:55px;
    }
    @media only screen and (min-width : 100px) and (max-width : 700px)
    {
        .back_image
        {
            background: url('images/dreamstime_m_41762328-min.jpg') no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: -24px 49px;
            height:390px;
            background-color:#E4E4E2;
        }
        .inner_imgs
        {
            margin-top:-13px;
        }

        .bt_types_2
        {
            height: 34px;
            padding-top: 4px;
            width: 150px;
        }
        .headtab
        {
            background-color: #ffffff;
            background-image: url("images/imageedit_1_5066986385.png"), url("images/imageedit_3_4141628663.png"), url("images/card_body_2.jpg");
            background-position: left top, right top;
            background-repeat: no-repeat, no-repeat, repeat;
            background-size: 20% auto, 30% auto, 50% auto;
        }
        .novisa
        {
            width:15%;
        }
        .header_up
        {
            color:#005E7E;
            height:60px;
        }
    }

    .bt_types_2
    {
        background: url('images/wood_back2.jpg') no-repeat;
        width:200px;
        height:40px;
    }
    .bt_types_2:hover
    {
        background: url('images/wood_back2.jpg') no-repeat;
    }
    .strip_image
    {
        background-image:url('images/Wooden3.jpg');
    }
    .back_image
    {

        background: url('images/dreamstime_m_41762328-min.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height:420px;
    }
    .inner_imgs
    {
        margin-top:20px;
    }
    .buy_img
    {
        background: url('images/wood_back2.jpg') no-repeat;
        width:30%;
    }
    .header_back
    {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cfe7fa+0,6393c1+100;Grey+Blue+3D */
        background: #cfe7fa; /* Old browsers */
        background: -moz-linear-gradient(top,  #cfe7fa 0%, #6393c1 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #cfe7fa 0%,#6393c1 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #cfe7fa 0%,#6393c1 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfe7fa', endColorstr='#6393c1',GradientType=0 ); /* IE6-9 */
    }
    .header_body
    {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f7fbfc+0,d9edf2+40,add9e4+100;Blue+3D+%231 */
        background: #f7fbfc; /* Old browsers */
        background: -moz-linear-gradient(top,  #f7fbfc 0%, #d9edf2 40%, #add9e4 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #f7fbfc 0%,#d9edf2 40%,#add9e4 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #f7fbfc 0%,#d9edf2 40%,#add9e4 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7fbfc', endColorstr='#add9e4',GradientType=0 ); /* IE6-9 */

    }
    .header_body >tr > td
    {
        text-align:center;
    }
    .header_back > th
    {
        text-align:center;
    }
    .checkbox_style
    {
        width:100px;
    }
    @media only screen and (min-width : 100px) and (max-width : 700px)
    {
        .back_image
        {
            background: url('images/dreamstime_m_41762328-min.jpg') no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position:-28px 0px;
            height:390px;
        }
        .inner_imgs
        {
            margin-top:-13px;
        }

        .bt_types_2
        {
            height: 34px;
            padding-top: 4px;
            width: 150px;
        }
    }


    .checkbox label:after,
    .radio label:after {
        content: '';
        display: table;
        clear: both;
    }

    .checkbox .cr,
    .radio .cr {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 1.3em;
        height: 1.3em;
        float: left;
        margin-right: .5em;
    }

    .radio .cr {
        border-radius: 50%;
    }

    .checkbox .cr .cr-icon,
    .radio .cr .cr-icon {
        position: absolute;
        font-size: .8em;
        line-height: 0;
        top: 50%;
        left: 20%;
    }

    .radio .cr .cr-icon {
        margin-left: 0.04em;
    }

    .checkbox label input[type="checkbox"],
    .radio label input[type="radio"] {
        display: none;
    }

    .checkbox label input[type="checkbox"] + .cr > .cr-icon,
    .radio label input[type="radio"] + .cr > .cr-icon {
        transform: scale(3) rotateZ(-20deg);
        opacity: 0;
        transition: all .3s ease-in;
    }

    .checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
    .radio label input[type="radio"]:checked + .cr > .cr-icon {
        transform: scale(1) rotateZ(0deg);
        opacity: 1;
    }

    .checkbox label input[type="checkbox"]:disabled + .cr,
    .radio label input[type="radio"]:disabled + .cr {
        opacity: .5;
    }


</style>
<script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {

        <?php if(isset($_REQUEST['location'])) { ?>
        var location="<?php echo $_REQUEST['location'];?>";

        $.ajax({
            type: "GET",
            async: false,
            url:"getreportdata.php?user="+location,
            success: function(data)	{
                $('#user_filter').prop('disabled',false);
                $('#user_filter').empty();
                $("#user_filter").append('<option value="0">--SELECT--</option>');
                $("#location_filter").val(<?php echo $_REQUEST['location']?>);
                var returnedData = JSON.parse(data);
                $.each(returnedData, function (i, item) {
                    $('#user_filter').append($('<option>', {
                        value: item.log_id,
                        text : item.user_name
                    }));
                });
            }
        });
        <?php } ?>
        <?php if(isset($_REQUEST['location']) && isset($_REQUEST['user_loc_filter'])) {?>
        var user_loc_filter="<?php echo $_REQUEST['user_loc_filter'];?>";
        $("#user_filter").val(user_loc_filter);
        <?php } ?>

        <?php if(isset($_REQUEST['filter_year'])) {?>
        var filter_year="<?php echo $_REQUEST['filter_year'];?>";
        $("#get_data_year").val(filter_year);
        <?php } ?>

        <?php if(isset($_REQUEST['filter_month'])) {?>
        var filter_month="<?php echo $_REQUEST['filter_month'];?>";
        $("#get_data_month").val(filter_month);
        <?php } ?>

        <?php if(isset($_REQUEST['filter_month']) && isset($_REQUEST['filter_year']))
        {
        ?>
        var ans="<?php echo $_REQUEST['filter_month'];?>";
        var ans1="<?php echo $_REQUEST['filter_year'];?>";

        var bloc="<?php echo $_REQUEST['location'];?>";
        var bloc1="<?php echo $_REQUEST['user_loc_filter'];?>";
        var url="getdeliveredrevenue.php?type=delivered&filter_month="+ans+"&filter_year="+ans1+"&location="+bloc+"&user_loc_filter="+bloc1;

        $.getJSON(url, function (result) {

            <?php
            }
            else
            {
            ?>
            $.getJSON("getdeliveredrevenue.php", function (result) {
                <?php
                }
                ?>
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "theme1",
                    title:{
                        text: "Delivered Revenue Reports"
                    },
                    data: [

                        {
                            type: "column",
                            dataPoints: result.delivered
                        },

                    ],

                });

                chart.render();
            });
        });


</script>
<div class="panel-body" style=" -moz-box-shadow: -1px 5px 17px #262526;    -webkit-box-shadow: -1px 5px 17px #262526;    box-shadow: -1px 5px 17px #262526;">
    <div class="pull-right">
        <a href="#top" style='position:fixed;'>
            <i class='fa fa-arrow-circle-up'></i>
        </a>
        <br>
        <br>
        <a href='#bottom' class='back-to-bottom ' style='position:fixed;'>
            <i class='fa fa-arrow-circle-down'></i>
        </a>
    </div>
    <b><span style='color:#005E7E;'><br>Total Order Report:</span></b>
    <center>
        <a href="/offers/delivery_reports.php" class="btn btn-primary"> Delivery Reports</a>
<!--        <a href="/offers/revenue_reports.php" class="btn btn-success"> Revenue Reports</a>-->
    </center>
    <br>
    <center>
        <a href="/offers/delivered_revenue.php" class="btn btn-warning"> Delivered Revenue</a>
        <a href="/offers/canceled_revenue.php" class="btn btn-danger"> Canceled Revenue</a>
    </center>

    <br>
    <div style=" margin:0px auto; overflow-x:auto;">
        <table class='table table-bordered table-striped' style="width:100%;">
            <tr>
                <td class="backred" style="color:#fff; font-weight:bold;">
                    Month:
                </td>
                <td style="background:#B0DED4 !important;">
                    <div id="info">
                        <input class="date-picker"  id="get_data_month" style="width:80%;" />
                    </div>
                </td>
            </tr>
            <tr>
                <td class="backred" style="color:#fff; font-weight:bold;">
                    Year:
                </td>
                <td style="background:#B0DED4 !important;">
                    <div id="info">
                        <input class="date-picker"  id="get_data_year" style="width:80%;" />
                    </div>
                </td>
            </tr>
            <tr>
                <td class="backred" style="color:#fff; font-weight:bold;">
                    Location:
                </td>
                <td style="background:#B0DED4 !important;">
                    <select id="location_filter">
                        <?php
                        $query_0 = "select * from location_price b where b.is_deleted=0";
                        $result_0 = $link->query($query_0) or die("Error in the consult." . mysqli_error($link));
                        $row_count_0=mysqli_num_rows($result_0);
                        echo "<option value='0'>--Select---</option>";
                        while($res_0=mysqli_fetch_assoc($result_0))
                        {
                            echo "<option value='".$res_0['id_loc']."'>".$res_0['location']."</option>";
                        }

                        ?>
                    </select>
                    <select id="user_filter" disabled>
                        <option value='0'>---Select--- </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <input type="button" value="Submit" onclick="get_data()"/> <input type="button" value="Refresh" onclick="redirect_openorders()"/></center>
                </td>
            </tr>
        </table>
    </div>
    <div style="border: 1px inset #ddd;">
        <center><div class="alert alert-success" style="width:300px;display:none;">
                <strong>Your order is submitted we will send the books through the courier service!</strong>
            </div></center>
    </div>
    <div style=" margin:0px auto; overflow-x:auto;">

        <?php
        $date_data="";
        $location_filter="";
        $user_location_filter="";
        $location_filter_query="";
        $filter_date="";
        $filter_date1="";
        $val="";
        $total_query="";

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
        while($res=mysqli_fetch_assoc($result))
        {
                $val.="<tr><td>".$res['user_name']."</td><td>".$res['location']."</td><td>".$res['delivered']."</td><td>".$res['amount']."</td></tr>";
        }
        ?>

        <div class='col-md-12'>
            <h4>

                <?php
                echo $date_data;
                ?>
            </h4>
            <table class='table table-bordered table-striped'>
                <thead><tr style='text-align:center'><td>User Name </td><td>Location</td><td>Total Delivered Count</td><td>Amount</td></tr></thead>
                <?php
                echo $val;
                ?>
            </table>
            <div id="chartContainer" style="height: 300px; width: 80%; margin:0px auto;"></div>
        </div>
    </div>





</div>

</div>
</div>
</div>

<!-- Modal -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header strip_image">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><b></b></center></h4>
            </div>
            <div class="modal-body back_image">
                <div class="inner_imgs">

                </div>
            </div>
            <div class="modal-footer strip_image">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<input type="hidden" id="single_book" value="">
<input type="hidden" id="all_books" value="">
</body>

<script>
    $(function() {
        $("#get_data_month").datepicker({
            changeMonth: true,
            showButtonPanel: true,
            dateFormat: "mm",
            beforeShow: function (e, t) {
                $(this).datepicker("hide");
                $('#get_data_year').parents('body').find('#ui-datepicker-div').removeClass("YearDatePicker");
                $('#get_data_month').parents('body').find('#ui-datepicker-div').addClass("hide-calendar");
                $('#get_data_month').parents('body').find('#ui-datepicker-div').addClass('MonthDatePicker');
            },
            onClose: function(dateText, inst){
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });

        $('#get_data_year').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy',
            beforeShow: function (e, t) {
                $(this).datepicker("hide");
                $('#get_data_year').parents('body').find('#ui-datepicker-div').removeClass("MonthDatePicker");
                $('#get_data_year').parents('body').find('#ui-datepicker-div').addClass("hide-calendar");
                $('#get_data_year').parents('body').find('#ui-datepicker-div').addClass('YearDatePicker');
            },
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
        $('#location_filter').on('change',function () {
            if($('#location_filter option:selected').val() != 0){
                $.ajax({
                    type: "GET",
                    async: false,
                    url:"getreportdata.php?user="+$('#location_filter option:selected').val(),
                    success: function(data)	{
                        $('#user_filter').prop('disabled',false);
                        $('#user_filter').empty();
                        $("#user_filter").append('<option value="0">--SELECT--</option>');
                        var returnedData = JSON.parse(data);
                        $.each(returnedData, function (i, item) {
                            $('#user_filter').append($('<option>', {
                                value: item.log_id,
                                text : item.user_name
                            }));
                        });
                    }
                });
            }else{
                $('#user_filter').prop('disabled',true);
                $('#user_filter').empty();
                $("#user_filter").append('<option value="0">--SELECT--</option>');
            }
        });
    });
</script>
</html>