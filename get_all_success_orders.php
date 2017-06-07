<?php
include("classes/db_connect.php");
include("header.php");
?>
 <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"   href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

<script>
$(function() {
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
if(isMobile)
{
$("#inner_slab").html("<div class='item active'><img src='images/01.jpg'  style='width:100%; height:400px;'></div><div class='item'><img src='images/02.jpg'  style='width:100%; height:400px;'></div><div class='item'><img src='images/03.jpg'  style='width:100%; height:400px;'></div><div class='item'><img src='images/04.jpg'  style='width:100%; height:400px;'></div><div class='item'><img src='images/05.jpg'  style='width:100%; height:400px;'></div><div class='item'><img src='images/06.jpg'  style='width:100%; height:400px;'></div>");
}
else
{

}

});

function form_submit(args1,args2) 
{

		$.ajax({
			type: "POST",
			async: false,
			url:"classes/update_order.php?mode=order_update&order_id="+args1+"&type="+args2,
			success: function(data)	{
				if(data == "done") {
					$(".alert-success").show();
					setTimeout(function() { $(".alert-success").hide(); }, 1000);				
					setTimeout(function(){
						window.location.href = "get_new_sale.php";
					}, 1000);
					//$(".alert-success").show();
					//setTimeout(function() { $(".alert-success").hide(); }, 5000);				
					//window.location.href = "index2.php";
				} else {
					
				}	
			}
		});
	
	
}
function get_data()
{
	var a=$("#get_data").val();
	var b=$("#location_filter option:selected").val();
	window.location.href = "get_all_success_orders.php?filter_date="+a+"&location="+b;
}
</script>
<style>
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

<div class="panel-body" style=" -moz-box-shadow: -1px 5px 17px #262526;    -webkit-box-shadow: -1px 5px 17px #262526;    box-shadow: -1px 5px 17px #262526;">
<b><span style="color:#005E7E;"><br>Successful Delivery Orders</span></b>
<br>
<br>
 <div id="datetimepicker" class="input-append date">
      <input type="text" id="get_data"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>

	</span>
		  
    </div>
<br>
Location:
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
<br>
<input type="button" value="Submit" onclick="get_data()"/>  <input type="button" value="Refresh" onclick="redirect_success_indelivery()"/> 
<div style="border: 1px inset #ddd;">
<center><div class="alert alert-success" style="width:300px;display:none;">
  <strong>Your order is submitted we will send the books through the courier service!</strong>
</div></center>
 </div>
<div style="margin:0px auto; overflow:auto;"> 
<?php
$date_data="";
$disp="";
$location_filter="";
$location_filter_query="";
$filter_date="";
if(isset($_REQUEST['filter_date']))
{
$filter_date=$_REQUEST['filter_date'];
$location_filter=$_REQUEST['location'];
if($location_filter!=0 && $filter_date=="")
{
$location_filter="a.location=b.id_loc and a.location=".$location_filter." and a.is_deleted=0";
}
else if($location_filter==0 && $filter_date!="")
{
$location_filter="a.location=b.id_loc and a.sale_success_date like'%".$_REQUEST['filter_date']."%' and a.is_deleted=0";	
}
else if($location_filter!=0 && $filter_date!="")
{
$location_filter="a.location=b.id_loc and a.sale_success_date like'%".$_REQUEST['filter_date']."%' and a.location=".$location_filter." and a.is_deleted=0";		
}
else if($location_filter==0 && $filter_date=="")
{
$location_filter="a.location=b.id_loc and a.location=b.id_loc and a.sale_stat=3 and a.is_deleted=0";		
}
$query = "select a.*,b.location from sales a , location_price b where ".$location_filter;
$date_data="on ".$_REQUEST['filter_date']."";
$disp="display:none;";
}
else
{
$query = "select a.*,b.location from sales a , location_price b where a.location=b.id_loc and a.sale_stat=3 and a.is_deleted=0";
}

$result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
$row_count=mysqli_num_rows($result);
echo "<b>Total new orders:&nbsp;".$row_count."</b><br>
<br>
<table class='table table-bordered table-striped'>
<tr>
<td>Country</td><td>Name</td><td>Mobile</td><td>Address</td><td>Date</td></tr>";
while($res=mysqli_fetch_assoc($result))
{
echo "
<tr><td>".$res['location']."</td><td>".$res['name']."</td><td>".$res['mobile']."</td><td>".$res['address']."</td><td>".$res['sale_success_date']."</td></tr>";
}
echo "</table>";
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
  <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'yyyy-MM-dd'
		
      });
    </script>
</html>