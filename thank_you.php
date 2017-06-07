
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery-1.js"></script>
<script src="js/bootstrap.js"></script>
 <link href="css/bootstrap.css"  rel="stylesheet">
<script>
$(document).ready(function(){
	
$(function() {
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
if(isMobile)
{
$("#inner_slab").html("<div class='item active'>"+
"<img src='images/All2-2-1000-1000.jpg'  style='width:100%; height:350px;'></div>"+
"<div class='item'><img src='images/All2-3-1000-1000.jpg'  style='width:100%; height:350px;' onclick='check_width()'></div>"+
"<div class='item'><img src='images/All2-4-1000-1000.jpg'  style='width:100%; height:350px;' onclick='check_width()'></div>"+
"<div class='item'><img src='images/All2-5-1000-1000.jpg'  style='width:100%; height:350px;' onclick='check_width()'></div>"+
"<div class='item'><img src='images/All2-6-1000-1000.jpg'  style='width:100%; height:350px;' onclick='check_width()'></div>"+
"<div class='item'><img src='images/All2-1-1000-1000.jpg'  style='width:100%; height:350px;' onclick='check_width()'></div>");
}
else
{

}
});
});


function redirect_to(args)
{
	var a=$("#party_name").val(); 
	var b=$("#click_value").val();
	window.location.href="get_price_location.php?location="+args+"&party="+a+"&click_val="+b;
}
function check_width()
{
	var a=$("#party_name").val(); 
	var b=$("#click_value").val();
	window.location.href="open_book.php?party="+a+"&click="+b;
}
function close_modal()
{
	//$('#modal1').modal('hide');
	$(".close").click();
	$("#buy_bow_button").click();
}
<!-- Facebook Pixel Code -->

!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '625150847690479', {
em: 'insert_email_variable,'
});
fbq('track', 'CompleteRegistration');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=625150847690479&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<style>
body
{
	 font-family: Droid Arabic Kufi !important;
}
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
background: url('images/cart.png'),#C72200; /* Old browsers */
 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 20% auto,100%;
	width:15%;
	

}
.buy_img:hover
{
background: #C72200; /* Old browsers */
	 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size:100%;
	width:15%;
	

}
	.buy_imgv
{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3c5bd+0,ff6600+0,c72200+100 */
background: url('images/view_zoom.png'),#C72200; /* Old browsers */	
 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 10% auto,98%;	
	width:15%;

}
.buy_imgv:hover
{
background: #C72200; /* Old browsers */
	 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size:98%;
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
background:url('images/cart.png'), #efc5ca; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #efc5ca 0%, #d24b5a 100%, #ba2737 100%, #f18e99 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #efc5ca 0%,#d24b5a 100%,#ba2737 100%,#f18e99 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #efc5ca 0%,#d24b5a 100%,#ba2737 100%,#f18e99 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efc5ca', endColorstr='#f18e99',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:40%;
	height:60px;
}
.buy_img2:hover
{

 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f18e99+0,ba2737+0,d24b5a+0,efc5ca+100 */
background:url('images/cart.png'), #f18e99; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #f18e99 0%, #ba2737 0%, #d24b5a 0%, #efc5ca 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #f18e99 0%,#ba2737 0%,#d24b5a 0%,#efc5ca 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #f18e99 0%,#ba2737 0%,#d24b5a 0%,#efc5ca 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f18e99', endColorstr='#efc5ca',GradientType=0 ); /* IE6-9 */
}
.buy_img3
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#9dd53a+0,a1d54f+50,80c217+100,7cbc0a+100 */
background:url('images/cart.png'), #9dd53a; /* Old browsers */
background: url('images/cart.png'),-moz-linear-gradient(top,  #9dd53a 0%, #a1d54f 50%, #80c217 100%, #7cbc0a 100%); /* FF3.6-15 */
background: url('images/cart.png'),-webkit-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 100%,#7cbc0a 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #9dd53a 0%,#a1d54f 50%,#80c217 100%,#7cbc0a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:40%;
	height:60px;
}
.buy_img3:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7cbc0a+0,80c217+0,a1d54f+50,9dd53a+100 */
background:url('images/cart.png'), #7cbc0a; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #7cbc0a 0%, #80c217 0%, #a1d54f 50%, #9dd53a 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #7cbc0a 0%,#80c217 0%,#a1d54f 50%,#9dd53a 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #7cbc0a 0%,#80c217 0%,#a1d54f 50%,#9dd53a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7cbc0a', endColorstr='#9dd53a',GradientType=0 ); /* IE6-9 */
}
.buy_img4
{
 
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#6db3f2+0,54a3ee+0,3690f0+49,1e69de+100 */
background:url('images/cart.png'), #6db3f2; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #6db3f2 0%, #54a3ee 0%, #3690f0 49%, #1e69de 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #6db3f2 0%,#54a3ee 0%,#3690f0 49%,#1e69de 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #6db3f2 0%,#54a3ee 0%,#3690f0 49%,#1e69de 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:40%;
	height:60px;
}
.buy_img4:hover
{
 
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e69de+0,3690f0+51,54a3ee+100,6db3f2+100 */
background:url('images/cart.png'), #1e69de; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #1e69de 0%, #3690f0 51%, #54a3ee 100%, #6db3f2 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #1e69de 0%,#3690f0 51%,#54a3ee 100%,#6db3f2 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #1e69de 0%,#3690f0 51%,#54a3ee 100%,#6db3f2 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e69de', endColorstr='#6db3f2',GradientType=0 ); /* IE6-9 */
}
.buy_img5
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3e2c7+0,c19e67+99,b68d4c+100,e9d4b3+100 */
background:url('images/cart.png'),  #f3e2c7; /* Old browsers */
background:url('images/cart.png'),  -moz-linear-gradient(top,  #f3e2c7 0%, #c19e67 99%, #b68d4c 100%, #e9d4b3 100%); /* FF3.6-15 */
background:url('images/cart.png'),  -webkit-linear-gradient(top,  #f3e2c7 0%,#c19e67 99%,#b68d4c 100%,#e9d4b3 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'),  linear-gradient(to bottom,  #f3e2c7 0%,#c19e67 99%,#b68d4c 100%,#e9d4b3 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3e2c7', endColorstr='#e9d4b3',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:40%;
	height:60px;
}
.buy_img5:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#e9d4b3+0,b68d4c+0,c19e67+1,f3e2c7+100 */
background:url('images/cart.png'), #e9d4b3; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #e9d4b3 0%, #b68d4c 0%, #c19e67 1%, #f3e2c7 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #e9d4b3 0%,#b68d4c 0%,#c19e67 1%,#f3e2c7 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #e9d4b3 0%,#b68d4c 0%,#c19e67 1%,#f3e2c7 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e9d4b3', endColorstr='#f3e2c7',GradientType=0 ); /* IE6-9 */
}
.buy_img6
{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#b5bdc8+0,828c95+100,28343b+100 */
background:url('images/cart.png'), #b5bdc8; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #b5bdc8 0%, #828c95 100%, #28343b 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #b5bdc8 0%,#828c95 100%,#28343b 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #b5bdc8 0%,#828c95 100%,#28343b 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5bdc8', endColorstr='#28343b',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:40%;
	height:60px;
}
.buy_img6:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#28343b+0,828c95+0,b5bdc8+100 */
background:url('images/cart.png'), #28343b; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #28343b 0%, #828c95 0%, #b5bdc8 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #28343b 0%,#828c95 0%,#b5bdc8 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #28343b 0%,#828c95 0%,#b5bdc8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#28343b', endColorstr='#b5bdc8',GradientType=0 ); /* IE6-9 */
}
.buy_img7
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#febbbb+0,fe9090+100,ff5c5c+100 */
background:url('images/cart.png'), #febbbb; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #febbbb 0%, #fe9090 100%, #ff5c5c 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #febbbb 0%,#fe9090 100%,#ff5c5c 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #febbbb 0%,#fe9090 100%,#ff5c5c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#febbbb', endColorstr='#ff5c5c',GradientType=0 ); /* IE6-9 */

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:40%;
	height:60px;
}
.buy_img7:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ff5c5c+0,fe9090+0,febbbb+100 */
background:url('images/cart.png'), #ff5c5c; /* Old browsers */
background:url('images/cart.png'), -moz-linear-gradient(top,  #ff5c5c 0%, #fe9090 0%, #febbbb 100%); /* FF3.6-15 */
background:url('images/cart.png'), -webkit-linear-gradient(top,  #ff5c5c 0%,#fe9090 0%,#febbbb 100%); /* Chrome10-25,Safari5.1-6 */
background:url('images/cart.png'), linear-gradient(to bottom,  #ff5c5c 0%,#fe9090 0%,#febbbb 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5c5c', endColorstr='#febbbb',GradientType=0 ); /* IE6-9 */
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
.offer_tab
{
   background-image:  url("images/imageedit_7_7232722684.png");
    background-position:  right 10px;
    background-repeat:  no-repeat;
    background-size: 15% auto;
}
  .whatsapp_icon
    {
    width:5%; 
    display:inline-block; 

    }
      .call_icon
    {
       width:4%; 
    display:inline-block; 
 
        
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
	background-size:100%, 100%; 
	background-repeat:no-repeat,no-repeat;
}
.modal .modal-popout-bg
{ 
	background-image:url('images/headstrips.png'),url('images/back_image2.jpg'); 
	background-size:100% 6%, 145%; 
	background-repeat:no-repeat;
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
iframe {
 background: #000000 none repeat scroll 0 0;
	/*transform:rotate(90deg); -webkit-transform:rotate(90deg); -moz-transform:rotate(90deg); -o-transform:rotate(90deg);*/
height:100%;
}
#myModal1
{
	
}


@media only screen and (min-width : 100px) and (max-width : 700px) 
{

	.modal .modal-popout-bg
{ 
 	background-image:url('images/headstrips.png'),url('images/back_image2.jpg'); 
	background-size:100% 6%, 170%; 
	background-repeat:no-repeat;
}
.upper_level
{
	margin-top:20px;
}
.body_style
{
	background-image:url('images/headstrips.png'),url('images/back_image2.jpg'); 
	background-size:100%, 1024px 900px; 
	background-repeat:no-repeat,no-repeat;
}
	.buy_img
{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3c5bd+0,ff6600+0,c72200+100 */
background: url('images/cart.png'),#C72200; /* Old browsers */	
	 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 20% auto,100%;	
	width:80%;

}

	.buy_imgv
{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f3c5bd+0,ff6600+0,c72200+100 */
background: url('images/view_zoom.png'),#C72200; /* Old browsers */	
	 background-position:  5% 48%;
    background-repeat: no-repeat;
    background-size: 10% auto,100%;	
	width:80%;

}
.buy_imgv:hover
{
	 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 100%;	
	width:80%;
}

.buy_img:hover
{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#c72200+0,ff6600+100,f3c5bd+100 */
background: #C72200; /* Old browsers */

 background-position:  0% 48%;
    background-repeat: no-repeat;
    background-size: 100%;	
	width:80%;
	

}
	.buy_img2
{
 
 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:100%;
height:100px;
}

.buy_img3
{

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:100%;
height:100px;
}

.buy_img4
{

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:100%;
height:100px;
}

.buy_img5
{

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:100%;
height:100px;
}

.buy_img6
{

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:100%;
height:100px;
}

.buy_img7
{

	 background-position:  0% 48%, center;
    background-repeat: no-repeat, no-repeat;
    background-size: 20% auto, 100%;
	width:100%;
height:100px;
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
    background-position: left center;
    background-repeat: no-repeat;
    background-size: 15% auto;
 
}
.offer_tab
{
   background-image:  url("images/imageedit_7_7232722684.png");
    background-position:  right -32px top -15px;
    background-repeat:  no-repeat;
    background-size: 45% auto;
}
  .whatsapp_icon
    {
    width:15%; 
    display:inline-block; 

    }
    .call_icon
    {
       width:13%; 
    display:inline-block; 
 
        
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
.head_title_sp
{
	direction: rtl;
	color: #d35b2b;
       text-align: justify;
    font-family: Droid Arabic Kufi;
    font-size: 24px;
    font-weight: 600;
    padding: 0 0 5px;

}
.head_title
{
	direction: rtl;
	color: #d35b2b;
       text-align: justify;
    font-family: Droid Arabic Kufi;
    font-size: 20px;
    font-weight: 600;
    padding: 0 0 5px;
 float:right;
}
.table_body
{
direction: rtl;
    text-align: justify;
    font-family: Droid Arabic Kufi;
    font-size: 16px;
    font-weight: 600;
    padding: 0 0 5px;
	 float:right;
}
</style>
</head>
<body class="body_style" style="">
<div  class="upper_level offer_tab" style="">


<div class="panel panel-default"  style="background-color:none !important;">
<div class="panel-heading" style="background-color:none !important;">

<div style=" margin:0px auto;">
<div class="headtab">
<center><img src="images/new_logo.png" class="img-responsive"></center>

</div>






</div>
</div>	
<br>
<div class="panel-body" style="background-color:#fff;">
<center>
 <center>
<img src="images/thankyou.jpg" style="width:50%;">
 </center>   
<div class="container">
<span class="head_title_sp">
  <img src="images/imageedit_9_8482063464.png"  style="" class="call_icon"><br>
+971 56 995 6666 <br> +966 54 452 3290<br>
<img src="images/whatsapp.png"  style="" class="whatsapp_icon"><br><span style="font-size:18px;">

مرحبا بكم في سلسلة
<br>
"معلم القراءة" و "علم بالقلم"
</span>
</span>
<!--==================== End here======================== -->
<br>
<br>


</center>


  <!-- end  here --> 


<!--

<marquee>
<img src="images/All2-1-2000-1000.jpg"  class="marquee_widths">  
<img src="images/All2-2-2000-1000.jpg" class="marquee_widths"> 
<img src="images/All2-3-2000-1000.jpg"  class="marquee_widths"> 
<img src="images/All2-4-2000-1000.jpg"  class="marquee_widths"> 
<img src="images/All2-5-2000-1000.jpg"  class="marquee_widths">
<img src="images/All2-6-2000-1000.jpg"  class="marquee_widths">
</marquee>-->
</div>
</div>
</div>
</div>	
<!-- Modal -->


</body>

<script type="text/javascript">
function opener()
{  
    location.href="http://eqraa.com";
    }
	setTimeout(function(){  opener(); }, 3000);
</script>
</html>