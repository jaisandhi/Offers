<?php
include("classes/db_connect.php");
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.js"></script>


<script>
$(document).ready(function(){

    $('.daterange').daterangepicker(
        {
            locale: {
                format: 'YYYY-MM-DD'
            },
        },
        function(start, end, label) {
//            alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });


    $("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
$("a[href='#bottom']").click(function() {
$("html, body").animate({ scrollTop: $(document).height() }, "slow");
  return false;
});

});
function form_submit(args1,args2) 
{
	var txt;
var r = confirm("Are you sure!");
if (r == true) {


		$.ajax({
			type: "POST",
			async: false,
			url:"classes/update_order.php?mode=order_update&order_id="+args1+"&type="+args2,
			success: function(data)	{
				if(data == "done") {
					$(".alert-success").show();
					setTimeout(function() { $(".alert-success").hide(); }, 1000);				
					setTimeout(function(){					
						window.location.href = "get_live_sale.php";
					
					}, 1000);
					//$(".alert-success").show();
					//setTimeout(function() { $(".alert-success").hide(); }, 5000);				
					//window.location.href = "index2.php";
				} else {
					
				}	
			}
		});
	
	
	   
} else {
  return false;
}
	
	
}
function get_data()
{
	var a=$("#get_data").val();
	var b=$("#location_filter").val();
	window.location.href = "get_live_sale.php?filter_date="+a+"&location="+b;
}
</script>
<style>
.fa 
{
	font-size:32px !important;
	margin-left:-10px;
}
.marquee_widths
{
width:150px;
}
.backred
{
background: -moz-linear-gradient(left,  #970010 0%, #ea3f42 30%, #ea3f42 65%, #970010 100%) !important; /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #970010 0%,#ea3f42 30%,#ea3f42 65%,#970010 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#970010', endColorstr='#970010',GradientType=1 
color: #fff !important;
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
.fa 
{
	font-size:32px !important;
	margin-left:-10px;
}

</style>

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
<b><span style='color:#005E7E;'><br>Live sale panel:</span></b>
<br>


<div style=" margin:0px auto; overflow-x:auto;">
<table class='table table-bordered table-striped' style="width:100%;">
<tr>
<td class="backred" style="color:#fff; font-weight:bold;">
Date:
</td>
<td style="background:#B0DED4 !important;">
 <div id="info">
     <input type="text" class="daterange" id="get_data" style="width:80%;"/>
<!--                <input class="date-picker"  id="get_data" style="width:80%;"/>-->
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
function get_loc_names($rol_id,$init_val)
{
global $link;
$return_data="<select id='selector_names_".$init_val."' style='width:125px;'>";
$query_0_1 = "select * from login where role=3 and location='".$rol_id."' and is_deleted=0";
$result_0_1 = $link->query($query_0_1) or die("Error in the consult." . mysqli_error($link));
$row_count_0_1=mysqli_num_rows($result_0_1);
$return_data.="<option value='0'>--Select---</option>";
while($res_0_1=mysqli_fetch_assoc($result_0_1))
{
$return_data.="<option value='".$res_0_1['log_id']."'>".$res_0_1['first_name']."</option>";	
}	
return $return_data."</select>";	
}
?>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<center>
<input type="button" value="Submit" onclick="get_data()"/> <input type='button' onclick='form_submit("0","move_all_to_open");' value='Move all'/> <input type="button" value="Refresh" onclick="redirect_liveorders()"/></center> </td>
</tr>
</table>
</div>
<div style="border: 1px inset #ddd;">
<center><div class="alert alert-success" style="width:300px;display:none;">
  <strong>Your order is submitted we will send the books through the courier service!</strong>
</div></center>
 </div>
<div style=" margin:0px auto;">
<?php
$date_data="";
$disp="";
$location_filter="";
$location_filter_query="";
$filter_date="";
if(isset($_REQUEST['filter_date']))
{
$filter_date=$_REQUEST['filter_date'];
        $implode = explode('-',$filter_date);
        $date1= $implode[0].'-'.$implode[1].'-'.$implode[2];
        $date2= $implode[3].'-'.$implode[4].'-'.$implode[5];
$location_filter=$_REQUEST['location'];
if($location_filter!=0 && $filter_date=="")
{
$location_filter="a.location=b.id_loc and a.location=".$location_filter." and a.is_deleted=0";
}
else if($location_filter==0 && $filter_date!="")
{
    $location_filter="a.location=b.id_loc and a.created_date BETWEEN  date('$date1')  AND  date('$date2')  and a.is_deleted=0 order by a.created_date desc";
}
else if($location_filter!=0 && $filter_date!="")
{
$location_filter="a.location=b.id_loc and a.created_date BETWEEN  date('$date1')  AND  date('$date2') and a.location=".$location_filter." and a.is_deleted=0";
}
else if($location_filter==0 && $filter_date=="")
{
$location_filter="a.location=b.id_loc and a.location=b.id_loc and a.sale_stat=0 and a.is_deleted=0";		
}
$query = "select a.*,b.location from sales a , location_price b where a.location=b.id_loc and ".$location_filter;
$date_data="on ".$_REQUEST['filter_date']."";
$disp="display:none;";
}
else
{
$query = "select a.*,b.location from sales a , location_price b where a.location=b.id_loc and a.sale_stat=0 and a.is_deleted=0";
}

$result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
$row_count=mysqli_num_rows($result);
echo "<br><center><div class='backred' style='color:#fff; width:50%;'><b>Total open orders:&nbsp;".$row_count."</b> ".$date_data."</div></center><br>
<script>$('#headcount').html('".$row_count."')</script>";
while($res=mysqli_fetch_assoc($result))
{
echo "<div class='col-md-12'>
<table class='table table-bordered table-striped'>
<tr><td  class='backred' style='width:25%; color:#fff;'>Country</td><td style='background:#B0DED4 !important;'>".$res['location']."</td></tr>
<tr><td class='backred' style='color:#fff;'>Name</td><td style='background:#B0DED4 !important;'>".$res['name']."</td></tr>
<tr><td class='backred' style='color:#fff;'>Mobile</td><td style='background:#B0DED4 !important;'>".$res['mobile']."</td></tr>
<tr><td class='backred' style='color:#fff;'>Address</td><td style='background:#B0DED4 !important;'>".$res['address']."</td></tr>
<tr><td class='backred' style='color:#fff;'>Created date</td><td style='background:#B0DED4 !important;'>".$res['created_date']."</td></tr>
<tr><td colspan='2'><input type='button' class='header_back btn btn-info btn-lg' onclick='form_submit(\"".$res['sales_id']."\",\"open\");' value='Move to open' style='".$disp."' />&nbsp;&nbsp;&nbsp;<input type='button' class='header_back btn btn-info btn-lg' onclick='form_submit(\"".$res['sales_id']."\",\"fake\")' value='Fake' style='".$disp."' /></td></tr>
</table>
</div></br>";
}
?>
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
  $(function () {
                $('.date-picker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    dateFormat: 'yy-mm-dd'
                
                });
            });
    </script>
</html>