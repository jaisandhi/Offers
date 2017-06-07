<?php
include("classes/db_connect.php");
include("header.php");
$disp="";
if($role_head=="2")
{
$disp="display:none;";
}
?>
 <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"   href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

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
function form_submit(args1,args2) 
{
	
	var txt;
var r = confirm("Are you sure to hide!");
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
						window.location.href = "sp_dashboard.php";
					
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
	window.location.href = "sp_dashboard.php?filter_date="+a+"&location="+b;
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
<input type="button" value="Submit" onclick="get_data()"/> <input type='button' onclick='form_submit("0","move_all_to_open");' value='Move all to open' style="<?php echo $disp;?>"/><input type="button" value="Refresh" onclick="redirect_liveorders()"/> 
<div style="border: 1px inset #ddd;">
<center><div class="alert alert-success" style="width:300px;display:none;">
  <strong>Your order is submitted we will send the books through the courier service!</strong>
</div></center>
 </div>
<div style=" margin:0px auto;">

<?php
$date_data="";
$location_filter="";
$location_filter_query="";
$filter_date="";
if(isset($_REQUEST['filter_date']))
{
$filter_date=$_REQUEST['filter_date'];
$location_filter=$_REQUEST['location'];
if($location_filter!=0 && $filter_date=="")
{
$location_filter="a.location=b.id_loc and a.location=".$location_filter." and a.is_deleted=0 and a.hide_flag=0";
}
else if($location_filter==0 && $filter_date!="")
{
$location_filter="a.location=b.id_loc and a.created_date like'%".$_REQUEST['filter_date']."%' and a.is_deleted=0 and a.hide_flag=0";	
}
else if($location_filter!=0 && $filter_date!="")
{
$location_filter="a.location=b.id_loc and a.created_date like'%".$_REQUEST['filter_date']."%' and a.location=".$location_filter." and a.is_deleted=0 and a.hide_flag=0";		
}
else if($location_filter==0 && $filter_date=="")
{
$location_filter="a.location=b.id_loc and a.location=b.id_loc and a.sale_stat=0 and a.is_deleted=0 and a.hide_flag=0";		
}
$query = "select a.*,b.location from sales a , location_price b where a.location=b.id_loc and ".$location_filter;
$date_data="on ".$_REQUEST['filter_date']."";
$disp="display:none;";
}
else
{
$query = "select a.*,b.location from sales a , location_price b where a.location=b.id_loc and a.sale_stat=0 and a.is_deleted=0 and a.hide_flag=0";

}


$result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
$row_count=mysqli_num_rows($result);
echo "<b>Total open orders:&nbsp;".$row_count."</b> ".$date_data."<br> ";
while($res=mysqli_fetch_assoc($result))
{
echo "<div class='col-md-12'>
<table class='table table-bordered table-striped'>
<tr><td style='width:25%'>Country</td><td>".$res['location']."</td></tr>
<tr><td>Name</td><td>".$res['name']."</td></tr>
<tr><td>Mobile</td><td>".$res['mobile']."</td></tr>
<tr><td>Address</td><td>".$res['address']."</td></tr>
<tr><td>Created date</td><td>".$res['created_date']."</td></tr>
<tr><td colspan='2'><input type='button' class='header_back btn btn-info btn-lg' onclick='form_submit(\"".$res['sales_id']."\",\"hide\");' value='Hide'/>&nbsp;&nbsp;&nbsp;<input type='button' class='header_back btn btn-info btn-lg' onclick='form_submit(\"".$res['sales_id']."\",\"fake\")' value='Fake' style='".$disp."' /></td></tr>
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