<html>
<head>
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
</script>
<style>
.marquee_widths
{
	width:150px;
}
.back_image
{
	background-image:url('images/dreamstime_m_41762328-min.jpg'); 
	background-size:1200px 600px; 
	height:550px; 
}
.inner_width
{
	margin:60px auto; width:70%;
}
.imginner
{
	width:50%; height:400px;
}
.lower_body
{
	background-image:url('images/dreamstime_m_59335392-min.jpg'); 
	background-size:1200px 200px;  
}
.bt_types
{
     background: -moz-linear-gradient(88deg, rgba(0,128,0,1) 0%, rgba(0,0,0,1) 100%); /* ff3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0,0,0,1)), color-stop(100%, rgba(0,128,0,1))); /* safari4+,chrome */
    background: -webkit-linear-gradient(88deg, rgba(0,128,0,1) 0%, rgba(0,0,0,1) 100%); /* safari5.1+,chrome10+ */
    background: -o-linear-gradient(88deg, rgba(0,128,0,1) 0%, rgba(0,0,0,1) 100%); /* opera 11.10+ */
    background: -ms-linear-gradient(88deg, rgba(0,128,0,1) 0%, rgba(0,0,0,1) 100%); /* ie10+ */
    background: linear-gradient(2deg, rgba(0,128,0,1) 0%, rgba(0,0,0,1) 100%); /* w3c */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#008000',GradientType=0 ); /* ie6-9 */ 
height: 40px;
    width: 335px;
font-weight:bold;
	color:#fff;

}
.bt_types:hover
{
     background: -moz-linear-gradient(88deg, rgba(0,0,0,1) 0%, rgba(0,128,0,1) 100%); /* ff3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0,128,0,1)), color-stop(100%, rgba(0,0,0,1))); /* safari4+,chrome */
    background: -webkit-linear-gradient(88deg, rgba(0,0,0,1) 0%, rgba(0,128,0,1) 100%); /* safari5.1+,chrome10+ */
    background: -o-linear-gradient(88deg, rgba(0,0,0,1) 0%, rgba(0,128,0,1) 100%); /* opera 11.10+ */
    background: -ms-linear-gradient(88deg, rgba(0,0,0,1) 0%, rgba(0,128,0,1) 100%); /* ie10+ */
    background: linear-gradient(2deg, rgba(0,0,0,1) 0%, rgba(0,128,0,1) 100%); /* w3c */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#008000', endColorstr='#000000',GradientType=0 ); /* ie6-9 */ 
}
@media only screen and (min-width : 100px) and (max-width : 700px) 
{
.marquee_widths
{
width:120px;	
}
.back_image
{
	background-image:url('images/dreamstime_m_41762328-min.jpg');
 background-size:500px 500px;
 background-position: -72px 25px;
 height:475px; 
}
.inner_width
{
	margin:5px auto; 
	width:100%;
}
.imginner
{
	
}
.lower_body
{
	background-image:url('images/dreamstime_m_59335392-min.jpg'); 
	background-size:600px 150px;  
}
}
</style>
</head>
<body style="background-image:url('images/dreamstime_m_47957287-min.jpg'); background-size:1400px 900px; background-repeat:no-repeat;">
<center><img src="images/logo.png" class="img-responsive"/> </center>
<div class="container" style="margin-top:20px">
<div class="row">
<div class="panel panel-default">
<div class="panel-heading back_image" >

<div class="inner_width" style="">

<div id="myCarousel" class="carousel slide" style="border: 1px inset #ddd;" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" id="inner_slab" role="listbox" style="">
    <div class="item active">
	<center>
      <img src="images/01.jpg" class="imginner">
	  </center>
    </div>
    <div class="item">
	  <center>
      <img src="images/02.jpg" class="imginner">
	   </center>
    </div>
	 <div class="item">
	 <center>
      <img src="images/03.jpg" class="imginner">
	   </center>
    </div>
	 <div class="item">
	 <center>
      <img src="images/04.jpg" class="imginner">
	   </center>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
</div>	

</div>

<div class="panel-body lower_body" style="">

<div style="">
<marquee><img src="images/01.jpg"  class="marquee_widths">  <img src="images/02.jpg" class="marquee_widths"> <img src="images/03.jpg"  class="marquee_widths"> <img src="images/04.jpg"  class="marquee_widths"> <img src="images/05.jpg"  class="marquee_widths"></marquee>
</div>
</div>
<center><button class="bt_types">Buy now</button></center>
</div>
</div>
</div>
</div>	
</body>
</html>