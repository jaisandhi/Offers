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
									window.location.href = "get_all_orders.php";						
						
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
	var b=$("#location_filter option:selected").val();
	if(a=="")
	{
		alert("Please select a date!");
		return false;
	}
	else if(b=="0")
	{
		alert("Please select a location!");
			return false;
	}
	else
	{
	window.location.href = "assign_orders.php?filter_date="+a+"&location="+b;
	}
}
function check_all_assign()
{
	var allChecked = true;
$("input.abc").each(function(index, element){
  if(!element.checked){
    allChecked = false;
    return false;
  } 
});
}
function checkall()
{
$("[name='checkall']").each(function(i) {
    if($(this).is(':checked')) {
        $(this).prop('checked', false);
    } else {
        $(this).prop('checked', true);
    }
});
	
}


function form_assign() 
{
	
	var e = document.getElementById("selector_names");
var strUser =e.selectedIndex;
var select_opt=e.options[e.selectedIndex].value;
var jsonArr = [];

	if(strUser==0)
	{
		alert("Please select a sales person!");
		return false;
	}
	else
	{
var r = confirm("Are you sure you want to assign!");
if (r == true) { 
$("[name='checkall']").each(function(i) {
    if($(this).is(':checked')) {

		jsonArr.push($(this).attr('id'));
    } 
});

var json = JSON.stringify(jsonArr);
	$.ajax({
type: "POST",
url:"classes/update_order.php?mode=order_update&type=assign_multiple&order_id=&selectopt="+select_opt,
data: json,
success: function(html){
	if(html == "done") {
		alert("Sales person assigned!");
	}
else
{
	
		alert("Unable to assign the sales person!");
}
}
}); 

		} else {
  return false;
}
	}
}
</script>
<style>
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
.fa 
{
	font-size:32px !important;
	margin-left:-10px;
}

</style>
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


<div   class="panel-body">
<div style=" margin:0px auto; overflow-x:auto;">
<table class='table table-bordered table-striped' style="width:100%;">
<tr>
<td class="backred" style="color:#fff; font-weight:bold;">
Date:
</td>
<td style="background:#B0DED4 !important;">
 <div id="info">
                <input class="date-picker"  id="get_data" style="width:80%;" />
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
</td>
</tr>
<tr>
<td class="backred" style="color:#fff; font-weight:bold;">
Sales Person
</td>
<td style="background:#B0DED4 !important;">
<?php
$date_data="";
$location_filter="";
$location_filter_query="";
$filter_date="";
$return_data="";
$show_assign="display:none;";
if(isset($_REQUEST['filter_date']))
{
	$show_assign="";
	$return_data.="<select id='selector_names' style='width:125px;'>
<option value='0'>--Select---</option>";	

$filter_date=$_REQUEST['filter_date'];
$location_filter=$_REQUEST['location'];

$query_0_1 = "select * from login where role=3 and location='".$location_filter."' and is_deleted=0";
$result_0_1 = $link->query($query_0_1) or die("Error in the consult." . mysqli_error($link));
$row_count_0_1=mysqli_num_rows($result_0_1);

while($res_0_1=mysqli_fetch_assoc($result_0_1))
{
$return_data.="<option value='".$res_0_1['log_id']."'>".$res_0_1['first_name']."</option>";	
}	
$return_data.="</select>";	

}

?>



<?php
echo  $return_data;
?></td>
</tr>
<tr>
<td colspan="2"><input type="button" value="Submit" onclick="get_data()"/><input type="button" value="Assign" style="<?php echo $show_assign;?>" onclick="form_assign()"/></td>
</tr>

</table>
</div>



<!--<input type="button" value="Submit" onclick="get_data()"/> <input type='button' onclick='form_submit("0","move_all_to_courier");' value='Move all to courier' style="<?php echo $disp;?>"/> <input type="button" value="Refresh" onclick="redirect_openorders()"/> -->

<div class="col-md-12" style="margin:0px auto; overflow:auto;"> 

<?php
if(isset($_REQUEST['filter_date']))
{

if($location_filter!=0 && $filter_date!="")
{
$query="select a.*,b.location from sales a , location_price b where a.location=b.id_loc and a.sale_open_date like'%".$_REQUEST['filter_date']."%'  and (a.assign_id is null or a.assign_id=0)  and a.location=".$location_filter." and a.is_deleted=0";		
$date_data="on ".$_REQUEST['filter_date']."";
$disp="display:none;";
$result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
$row_count=mysqli_num_rows($result);
}

echo "<b>Total open orders:&nbsp;".$row_count."</b> ".$date_data."<br>
<br>
<table class='table table-bordered table-striped'>
<tr>
<td class='backred' style='color:#fff; font-weight:bold;'>Action<input type='checkbox' onclick='checkall()'/></td><td class='backred' style='color:#fff; font-weight:bold;'>Country</td><td class='backred' style='color:#fff; font-weight:bold;'>Name</td><td class='backred' style='color:#fff; font-weight:bold;'>Mobile</td><td class='backred' style='color:#fff; font-weight:bold;'>Address</td><td class='backred' style='color:#fff; font-weight:bold;'>Date</td></tr>";
while($res=mysqli_fetch_assoc($result))
{
echo "
<tr><td><input type='checkbox' name='checkall' id='".$res['sales_id']."' /></td><td>".$res['location']."</td><td>".$res['name']."</td><td>".$res['mobile']."</td><td>".$res['address']."</td><td>".$res['sale_open_date']."</td></tr>";
}
echo "</table>";
}

?>

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