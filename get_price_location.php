<?php
include("classes/db_connect.php");
$location="";
if(isset($_REQUEST['location']))
{
$location=$_REQUEST['location'];	
$query = "select * from location_price a where id_loc=".$location." and is_deleted=0";
$result = $link->query($query) or die("Error in the consult." . mysqli_error($link));
$single_price="";
$all_price="";
$price_name="";
$party="";
$click_value="";
$random_number=''; 
$mob_code="";
$mob_length="";
$no_of_books="";
$mobext="";
$flag="OT";
if(isset($_REQUEST['flag']))
{
    $flag=$_REQUEST['flag'];
}
// set up a blank string
while($res=mysqli_fetch_assoc($result))
{
	$single_price=$res['price_per_book'];
	$all_price=$res['price_all'];
	$price_name=$res['price_name'];
	$mob_code=$res['mobile_code'];
$mob_length=$res['mob_numb_length'];
$no_of_books=$res['no_of_books'];
$mobext=$res['mobile_code'];
}

if(isset($_REQUEST['party']))
{
	$party=$_REQUEST['party'];
/*

$click_value=$_REQUEST['click_val'];
$digits_needed=8;

$count=0;
while ( $count < $digits_needed ) 
{
$random_digit = mt_rand(0, 9);
$random_number .= $random_digit;
$count++;
}
if($party!="")
{
$query_0 = "insert into counter_check SET click_value='".$click_value."', party='".$party."', click_unique='".$random_number."', created_data=now()";
$result_0 = $link->query($query_0) or die("Error in the consult." . mysqli_error($link));
}
*/
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery-1.js"></script>
<script src="js/bootstrap.js"></script>
 <link href="css/bootstrap.css"  rel="stylesheet">
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

$(function () {


  /*  $("#mobile").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });*/

});


$(function () {
	var minlength_global = <?php echo $mob_length; ?>;
var minlength = <?php echo $mob_length; ?>;
var setter=0;
var other_len=minlength_global;
$("#mobile").keyup(function (e) {
var that = this,
value = $(this).val();

if(value.length==0)
{
	
	minlength=minlength_global;
	other_len=minlength;

}
if(value[0]==0)
{
	
	other_len=minlength;	
}
else if((value[0]!=0 && value.length!=0) && setter==0)
{


 minlength=minlength-1;
	other_len=minlength;
setter=1;

}

if (value.length == minlength || value.length == other_len) 
{	
$.ajax({
type: "POST",
url: "classes/checkval.php?getter_mode=check_mobile",
data: {
'mphone_lead' : value
},
dataType: "text",
success: function(msg){
var response=$.trim(msg);
//we need to check if the value is the same
if (response=="emptys") 
{
$("#mobile_dup").css("display","none");
$("#mobile").css("border","1px solid #ccc");
$("#submit_button").css("display","block");
}
else
{
$("#mobile_dup").css("display","block");
$("#mobile").css("border","1px solid #a94442");
$("#submit_button").css("display","none");
}
}
});
}
else if(value.length > minlength)
{
var str = value.substring(0, value.length - 1);
$("#mobile").val(str);
$("#mobile_error_inv").css("display","none");
$("#submit_button").css("display","none");
}
else if(value.length < minlength)
{
$("#mobile_dup").css("display","none");
$("#submit_button").css("display","block");
}
else if(value.length == minlength && value[0]!=0)
{
var str = value.substring(0, value.length - 2);
$("#mobile").val(str);
$("#mobile_error_inv").css("display","none");
}
/*else if(value.length == 0 && value.length == "")
{
	setter=0;
}*/
});
});

function form_submit() {
	var	name         = $("#name").val();
	var	mobile       = $("#mobile").val();
	var	address      = $("#address").val();
	var	location     = "<?php echo $_REQUEST["location"]; ?>";
	var party_name   = $("#party_name").val();
	var click_value = $("#click_value").val();
	var rand_value= $("#rand_value").val();
	var validate     = 0;
	var quantity_vals= $("#quantity_vals").val();
	var mobext=$("#mobext").val();
	var loc_type=$("#loc_type").val();
	//alert(name + mobile + address + location);
		$("#matter_div").css("display","none");
	if(name == "" ) {
		$("#name").css({
			'border': '1px dashed #FF3F3F',
			"background": "#FAEBE7"
		});	
		validate = 1;
	} else {
		$("#name").css({
			'border': '1px solid #D5D5D5',
			"background": "#FFFFFF"
		});
	}
	
	if(mobile == "" ) {
		$("#mobile").css({
			'border': '1px dashed #FF3F3F',
			"background": "#FAEBE7"
		});	
		validate = 1;
	} else {
		$("#mobile").css({
			'border': '1px solid #D5D5D5',
			"background": "#FFFFFF"
		});
	}
	
	if(address == "" ) {
		$("#address").css({
			'border': '1px dashed #FF3F3F',
			"background": "#FAEBE7"
		});	
		validate = 1;
	} else {
		$("#address").css({
			'border': '1px solid #D5D5D5',
			"background": "#FFFFFF"
		});
	}
if(quantity_vals == 0 ) {
		$("#address").css({
			'border': '1px dashed #FF3F3F',
			"background": "#FAEBE7"
		});	
		validate = 1;
	} else {
		$("#address").css({
			'border': '1px solid #D5D5D5',
			"background": "#FFFFFF"
		});
	}

	if(validate == 1)	{
		return false;
	} else {
			$("#table_view").css("display","none");
		$.ajax({
			type: "POST",
			async: false,
			url:"classes/retrieve_data.php?formSubmit=all&name="+name+"&mobile="+mobile+"&address="+address+"&location="+location+"&quantity_vals="+quantity_vals+"&party_name="+party_name+"&click_value="+click_value+"&rand_value="+rand_value+"&mobext="+mobext,
			success: function(data)	{
				if(data != "") {
			
					    if(party_name=="FB")
					    {
						window.location.href = "thank_you.php";
					    }
					    else
					    {
					    window.location.href = "thank_you_eg.php";    
					    }

					//$(".alert-success").show();
					//setTimeout(function() { $(".alert-success").hide(); }, 5000);				
					//window.location.href = "index2.php";
					
					/*
							$(".alert-success").show();
					setTimeout(function() { $(".alert-success").hide(); }, 2000);				
					setTimeout(function(){					}, 2000);
					*/
				} else {
						$("#table_view").css("display","block");
	
				}	
			}
		});
	}
	
}

</script>
<style>
.marquee_widths
{
width:150px;
}
.carousel-control.left 
{
	background-image: none !important;
}
.carousel-control.right
{
	background-image: none !important;
}
.upper_level
{
	margin-top:50px;
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
height:475px;
background-position:0px -375px ;
}
.inner_imgs
{
	margin-top:40px;
}
.buy_img
{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3c5bd+0,ff6600+0,c72200+100 */
background: url('images/cart.png'),#f3c5bd; /* Old browsers */
background: url('images/cart.png'),-moz-linear-gradient(top,  #f3c5bd 0%, #ff6600 0%, #c72200 100%); /* FF3.6-15 */
background: url('images/cart.png'),-webkit-linear-gradient(top,  #f3c5bd 0%,#ff6600 0%,#c72200 100%); /* Chrome10-25,Safari5.1-6 */
background: url('images/cart.png'),linear-gradient(to bottom,  #f3c5bd 0%,#ff6600 0%,#c72200 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3c5bd', endColorstr='#c72200',GradientType=0 ); /* IE6-9 */
	 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 20% auto,100%;
	width:15%;
	

}
.buy_img:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#c72200+0,ff6600+100,f3c5bd+100 */
background:url('images/cart.png'), #c72200; /* Old browsers */
background: url('images/cart.png'),-moz-linear-gradient(top,  #c72200 0%, #ff6600 100%, #f3c5bd 100%); /* FF3.6-15 */
background: url('images/cart.png'),-webkit-linear-gradient(top,  #c72200 0%,#ff6600 100%,#f3c5bd 100%); /* Chrome10-25,Safari5.1-6 */
background: url('images/cart.png'),linear-gradient(to bottom,  #c72200 0%,#ff6600 100%,#f3c5bd 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c72200', endColorstr='#f3c5bd',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 20% auto,100%;
	width:15%;
	

}
.buy_img_close
{
	 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3c5bd+0,ff6600+0,c72200+100 */
background: #f3c5bd; /* Old browsers */
background: -moz-linear-gradient(top,  #f3c5bd 0%, #ff6600 0%, #c72200 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #f3c5bd 0%,#ff6600 0%,#c72200 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #f3c5bd 0%,#ff6600 0%,#c72200 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3c5bd', endColorstr='#c72200',GradientType=0 ); /* IE6-9 */
color:#fff;
}
.buy_img_close:hover
{
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#c72200+0,ff6600+100,f3c5bd+100 */
background: #c72200; /* Old browsers */
background: -moz-linear-gradient(top,  #c72200 0%, #ff6600 100%, #f3c5bd 100%); /* FF3.6-15 */
background:-webkit-linear-gradient(top,  #c72200 0%,#ff6600 100%,#f3c5bd 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #c72200 0%,#ff6600 100%,#f3c5bd 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c72200', endColorstr='#f3c5bd',GradientType=0 ); /* IE6-9 */
color:#fff;
}
.buy_img2
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#efc5ca+0,d24b5a+100,ba2737+100,f18e99+100 */
background: #efc5ca; /* Old browsers */
background:-moz-linear-gradient(top,  #efc5ca 0%, #d24b5a 100%, #ba2737 100%, #f18e99 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #efc5ca 0%,#d24b5a 100%,#ba2737 100%,#f18e99 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #efc5ca 0%,#d24b5a 100%,#ba2737 100%,#f18e99 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efc5ca', endColorstr='#f18e99',GradientType=0 ); /* IE6-9 */

	 background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
	font-size:16px;
	font-weight:bold;
	color:#fff;
}

.buy_img3
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#9dd53a+0,a1d54f+50,80c217+100,7cbc0a+100 */
background: #9dd53a; /* Old browsers */
background: -moz-linear-gradient(top,  #9dd53a 0%, #a1d54f 50%, #80c217 100%, #7cbc0a 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 100%,#7cbc0a 100%); /* Chrome10-25,Safari5.1-6 */
background:linear-gradient(to bottom,  #9dd53a 0%,#a1d54f 50%,#80c217 100%,#7cbc0a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=0 ); /* IE6-9 */

	 background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
	font-size:16px;
	font-weight:bold;
	color:#fff;
}

.buy_img4
{
 
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#6db3f2+0,54a3ee+0,3690f0+49,1e69de+100 */
background: #6db3f2; /* Old browsers */
background: -moz-linear-gradient(top,  #6db3f2 0%, #54a3ee 0%, #3690f0 49%, #1e69de 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #6db3f2 0%,#54a3ee 0%,#3690f0 49%,#1e69de 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #6db3f2 0%,#54a3ee 0%,#3690f0 49%,#1e69de 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 ); /* IE6-9 */
 background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
	font-size:20px;
	font-weight:bold;
	color:#fff;
}

.buy_img5
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3e2c7+0,c19e67+99,b68d4c+100,e9d4b3+100 */
background: #f3e2c7; /* Old browsers */
background: -moz-linear-gradient(top,  #f3e2c7 0%, #c19e67 99%, #b68d4c 100%, #e9d4b3 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #f3e2c7 0%,#c19e67 99%,#b68d4c 100%,#e9d4b3 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #f3e2c7 0%,#c19e67 99%,#b68d4c 100%,#e9d4b3 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3e2c7', endColorstr='#e9d4b3',GradientType=0 ); /* IE6-9 */
 background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
	font-size:20px;
	font-weight:bold;
	color:#fff;
}

.buy_img6
{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#b5bdc8+0,828c95+100,28343b+100 */
background: #b5bdc8; /* Old browsers */
background:-moz-linear-gradient(top,  #b5bdc8 0%, #828c95 100%, #28343b 100%); /* FF3.6-15 */
background:-webkit-linear-gradient(top,  #b5bdc8 0%,#828c95 100%,#28343b 100%); /* Chrome10-25,Safari5.1-6 */
background:linear-gradient(to bottom,  #b5bdc8 0%,#828c95 100%,#28343b 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5bdc8', endColorstr='#28343b',GradientType=0 ); /* IE6-9 */
 background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
	font-size:20px;
	font-weight:bold;
	color:#fff;
}

.buy_img7
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#febbbb+0,fe9090+100,ff5c5c+100 */
background: #febbbb; /* Old browsers */
background: -moz-linear-gradient(top,  #febbbb 0%, #fe9090 100%, #ff5c5c 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #febbbb 0%,#fe9090 100%,#ff5c5c 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #febbbb 0%,#fe9090 100%,#ff5c5c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#febbbb', endColorstr='#ff5c5c',GradientType=0 ); /* IE6-9 */
 background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;
	font-size:20px;
	font-weight:bold;
	color:#fff;
}
.buy_img8
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#e4efc0+0,abbd73+100;Olive+3D+%232 */
background:url('images/cart.png'), #e4efc0; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #e4efc0 0%, #abbd73 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #e4efc0 0%,#abbd73 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #e4efc0 0%,#abbd73 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e4efc0', endColorstr='#abbd73',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:40%;
	height:60px;
}
.buy_img8:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#abbd73+0,e4efc0+100 */
background:url('images/cart.png'), #abbd73; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #abbd73 0%, #e4efc0 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #abbd73 0%,#e4efc0 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #abbd73 0%,#e4efc0 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#abbd73', endColorstr='#e4efc0',GradientType=0 ); /* IE6-9 */
}
.headtab
{


    background-image: url("images/imageedit_4_2568270463.png");
    background-position: left center;
    background-repeat: no-repeat;
    background-size: 5% auto;
	
}
.novisa
{	 

margin-left: -2%;
    width: 7%;
}
.header_up
{
color:#005E7E;
}
.body_style
{
	background-image:url('images/headstrips.png'),url('images/back_image2.jpg'); 
	background-size:100%, 100% 100%; 
	background-repeat:no-repeat,no-repeat;
}
.modal .modal-popout-bg
{ 
	background-image:url('images/headstrips.png'),url('images/back_image2.jpg'); 
	background-size:100% 6%, 145%; 
	background-repeat:no-repeat;
}
@media only screen and (min-width : 100px) and (max-width : 700px) 
{
	.modal .modal-popout-bg
{ 
 	background-image:url('images/headstrips.png'),url('images/back_image2.jpg'); 
	background-size:100% 6%, 250%; 
	background-repeat:no-repeat;
}
.upper_level
{
	margin-top:20px;
}
.body_style
{
	background-image:url('images/headstrips.png'),url('images/back_image2.jpg'); 
	background-size:100%, 100% 100%; 
	background-repeat:no-repeat,no-repeat;
}
	.buy_img
{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3c5bd+0,ff6600+0,c72200+100 */
background: url('images/cart.png'),#f3c5bd; /* Old browsers */
background: url('images/cart.png'),-moz-linear-gradient(top,  #f3c5bd 0%, #ff6600 0%, #c72200 100%); /* FF3.6-15 */
background: url('images/cart.png'),-webkit-linear-gradient(top,  #f3c5bd 0%,#ff6600 0%,#c72200 100%); /* Chrome10-25,Safari5.1-6 */
background: url('images/cart.png'),linear-gradient(to bottom,  #f3c5bd 0%,#ff6600 0%,#c72200 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3c5bd', endColorstr='#c72200',GradientType=0 ); /* IE6-9 */
	
	 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 20% auto,100%;	
	width:80%;

}
.buy_img:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#c72200+0,ff6600+100,f3c5bd+100 */
background:url('images/cart.png'), #c72200; /* Old browsers */
background: url('images/cart.png'),-moz-linear-gradient(top,  #c72200 0%, #ff6600 100%, #f3c5bd 100%); /* FF3.6-15 */
background: url('images/cart.png'),-webkit-linear-gradient(top,  #c72200 0%,#ff6600 100%,#f3c5bd 100%); /* Chrome10-25,Safari5.1-6 */
background: url('images/cart.png'),linear-gradient(to bottom,  #c72200 0%,#ff6600 100%,#f3c5bd 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c72200', endColorstr='#f3c5bd',GradientType=0 ); /* IE6-9 */

 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 20% auto,100%;	
	width:80%;
	

}
	

.buy_img8
{

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:100%;
height:100px;
}

.back_image
{
background: url('images/dreamstime_m_41762328-min.jpg') no-repeat; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-position: 0 -85px;
height:390px;
background-color:#E4E4E2;
}
	.inner_imgs
	{
	margin-top:50px;	
	}

.bt_types_2
{
	font-size: 16px;
    height: 42px;
    padding-top: 0;
    width: 150px;
}
.headtab
{

    background-image: url("images/imageedit_4_2568270463.png");
    background-position: left top;
    background-repeat: no-repeat;
    background-size: 15% auto;
 
}
.novisa
{	 
width:15%;
}
.header_up
{
color:#005E7E; 
	
}
.marquee_widths
{
width:120px;	
}
}
.panel 
{
    background-color:transparent !important;
	border: none !important;
}
.panel-default > .panel-heading 
{
	background-color:transparent !important;
	border: none !important;
}
</style>
</head>
<body class="body_style" style="">
<div  class="upper_level" style="">


<div class="panel panel-default"  style="background-color:none !important;">
<div class="panel-heading" style="background-color:none !important;">

<div style=" margin:0px auto;">
<div class="headtab">
<center><img src="images/new_logo.png" class="img-responsive"></center>

</div>
<div class="col-md-12" style="">

<center><div class="alert alert-success buy_img2" style="width:300px;display:none;">
    <strong>شكرا جزيلا تم تسجيل البيانات بنجاح سوف يتم التواصل معكم لتسليم الطلب</strong>
    <br>
  <strong>Your order is submitted we will send the books through the courier service!</strong>
</div></center>

<center>
<form>
<div style="width:100%; overflow-x:auto;" id="table_view">
<span style="font-size:12px;">
لاحاجة لاستخدام بطاقة الائتمان الدفع بعد الاستلام
<br>
Fill the below form with your full address to get the books and pay the courier person with the below mention price.</span>
<table class="table table-bordered" style="">
<thead class="">
<tr class="buy_img2">
<td>
كمية<br>Quantity
</td>
<td>
<input type="text" class="form-control" aria-label="Text input with checkbox" id="quantity_vals" value="1" style="width:50px;"/> 1 pack = <?php echo $no_of_books;?> Books /ستة كتب
</td>
</tr>
<tr class="buy_img3">
<td>
السعر<br>Price
</td>
<td>
<?php echo "<b>".$all_price." ".$price_name."</b>"; ?>
</td>
</tr>
<tr class="buy_img3">
<td>
الأسم<br>Name
</td>
<td>
<input type="text" class="form-control" id="name" style=""/>
</td>
</tr>
<tr class="buy_img3">
<td>
رقم الهاتف <br> Mobile
</td>
<td>
<table><tr><td><input type="text" disabled="disabled" class="form-control" style="width:50px;" value="<?php echo $mob_code; ?>"/></td><td><input type="number" id="mobile" class="form-control" style="width:150px;" value=""/></td></tr></table>
<div id="mobile_dup" style='display:none; color:red;'>قد تم التسجيل بنجاح وسوف يتم ارسال سلسلة الكتب فى اقرب وقت شكرا جزيلا<br>You have placed an order already!</div>
</td>
</tr>
<tr class="buy_img3">
<td>
العنوان <br> Address
</td>
<td>
<textarea id="address" class="form-control"></textarea>
</td>
</tr>
<tr>
<td colspan="2">
<center><input type="button" id="submit_button" name="submit" class="header_back btn btn-info btn-lg buy_img" onclick="form_submit();" value="SUBMIT / تأكيد الطلب" /></center>
</td>
</tr>

</tbody>
</table>
</div>
</form>
</center>
</div>


</div>
</div>	
<div class="panel-body" style="">

</div>
</div>
</div>
</div>	
<!-- Modal -->
<div id="myModal" class="modal fade body_style" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content modal-popout-bg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body" style="background-color:none !important;">
	   <h4 class="modal-title" style="font-size:18px; color:#005E7E;"><center><b> الرجاء اختيار البلد ، التوصيل مجانآ الى جميع البلآد<br>Select your country to buy these books!</b></center></h4>
	  <div class="inner_imgs">
    <center><button type="button" class="buy_img2 btn btn-info btn-lg bt_types_2" onclick="redirect_to('1')">الإمارات <br> UAE </button>
	  <button type="button" class="buy_img3 btn btn-info btn-lg bt_types_2" onclick="redirect_to('2')">السعودية<br>  SAUDI ARABIA </button></center>
	   <br>
	   <center><button type="button" class="buy_img4 btn btn-info btn-lg bt_types_2" onclick="redirect_to('3')">عمان  <br> OMAN</button>
	  <button type="button" class="buy_img5 btn btn-info btn-lg bt_types_2" onclick="redirect_to('4')">قطر<br>  QATAR </button></center>
	   <br>
	   <center><button type="button" class="buy_img6 btn btn-info btn-lg bt_types_2" onclick="redirect_to('5')"> البحرين<br>  BAHRAIN </button>
	   <button type="button" class="buy_img7 btn btn-info btn-lg bt_types_2" onclick="redirect_to('6')">الاردن<br>  JORDAN </button></center>
	   	      <br>
	   <center><button type="button" class="buy_img8 btn btn-info btn-lg bt_types_2" onclick="redirect_to('7')">الكويت <br> KUWAIT </button></center>
	   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default buy_img_close" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<input type="hidden" id="single_book" value="<?php echo $single_price;?>">
<input type="hidden" id="all_books" value="<?php echo $all_price;?>">
<input type="hidden" id="party_name" value="<?php echo $party;?>"/>
<input type="hidden" id="click_value" value="<?php echo $click_value;?>"/>
<input type="hidden" id="rand_value" value="<?php echo $random_number;?>"/>
<input type="hidden" id="mobext" value="<?php echo $mobext;?>"/>
<input type="hidden" id="loc_type" value="<?php echo $flag;?>"/>


</body>
</html>