 <?php
session_start();
$a =$_GET['id'];
$_SESSION['hname']=$a;
?>
<?php
$username="root";
$server="localhost";
$dbname="db1";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$l=$_SESSION['hname'];
$m=$_SESSION['hid'];
$sql_query="select hid from hotel where hname='$l' && hid<='$m'";
$result = $conn->query($sql_query);

if($result->num_rows>0)
   {
   while($row=$result->fetch_assoc())
   {
      
	 $d=$row["hid"];
	 $_SESSION['hid']=$d;
	 
	  
	}
  }



	
	
	
	
	

?>

 <!doctype html>
<html>
<head>
<title>ROOM TYPE</title>
<style> 
.buttonsel {
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

.buttonsel:hover {
    background-color: #999999;
    color: white;
}
.buttonsel:active:after {
    padding: 0;
    margin: 0;
    opacity: 0.6;
    transition: 0s
}
.buttonsel:after {
    content: "";
    background: #0d0d0d;
    display: block;
    position: absolute;
    padding-top: 24%;
    padding-left: 111%;
    margin-left: -15px!important;
    margin-top: -16.5%;
    opacity: 0;
    transition: all 0.4s
}

.buttonsel {
  display: inline-block;
  border-radius: 8px;
  background-color: #f2f2f2;
  opacity:0.75;
  border: none;
  position:relative;
  color: #0d0d0d;
  text-align: center;
  font-size: 30px;
  padding: 15px;
  width: 15.38%;  
  left:19%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
}

.buttonsel span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonsel span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: 20px;
  transition: 0.5s;
}

.buttonsel:hover span {
  padding-right: 25px;
}

.buttonsel:hover span:after {
  opacity: 1;
  right: 0;
}



.button {
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

.button:hover {
    background-color: #999999;
    color: white;
}
.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 0.6;
    transition: 0s
}
.button:after {
    content: "";
    background: #0d0d0d;
    display: block;
    position: absolute;
    padding-top: 24%;
    padding-left: 111%;
    margin-left: -15px!important;
    margin-top: -16.5%;
    opacity: 0;
    transition: all 0.4s
}

.button {
  display: inline-block;
  border-radius: 8px;
  background-color: #0d0d0d;
  opacity:0.75;
  border: none;
  position:relative;
  color: #FFFFFF;
  text-align: center;
  font-size: 30px;
  padding: 15px;
  width: 15.38%;  
  left:19%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: 20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
div.transbox
{
  position:absolute;
  left:20.5%;
  width:60%;
  height:268%;
  margin: 0px;
  background-color:rgba(13,13,13,0.5);
  filter:alpha(opacity=60); /* For IE8 and earlier */
}
div.transbox p
{
  position:fixed;
  margin: 50%;
  font-weight: bold;
  color: #000000;
}
body {

    background: url("20.jpg");
    background-size:1950px 1950px;
    background-repeat: no-repeat;
    padding-top: 
}
.fillwidth {
    min-width: 100%;
    height: auto;
}

</style>

<script type="text/javascript">

function OnButton1()
{window.location='try.html';
}
function OnButton2()
{window.location='try2.html';
}
function OnButton3()
{window.location='searchpc.html';
}
function OnButton4()
{window.location='contact.html';
}
function OnButton5()
{
window.location='payment.php?id1=premier';

}
function OnButton6()
{
window.location='payment.php?id1=superior';

}
function OnButton7()
{
window.location='payment.php?id1=exec';
}
function OnButton8()
{
window.location='payment.php?id1=royal';
}

</script>
</head>
<body>

<button class="button" style="vertical-align:left" onclick="OnButton1();"><span>Home</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton2();"><span>Hotels</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton3();"><span>Search</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton4();"><span>Contact Us</span></button>

<div class="transbox">

<font face="Rockwell" color="white" size="6">
<br>
&nbsp;<label>Premier Room</label>
<hr align="center" size="2" width="100%" color="grey">
</font>
<font face="Monotype Corsiva" color="white" size="5">
<table cellspacing="7" cellpadding="7">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Breakfast Included</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.3000.00</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Parking</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="OnButton5();" style="vertical-align:left; width: 110px; background-color:; height:50px; font-size:14pt;"   ><span>Book</span></button><td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Internet</td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Queen Bed</td>

</tr>

</font>
<br>
<img src="troom.jpg" height="200" width="300" align="left">
</table>
<br>
<font face="WildWest" color="white" size="6"><b>
<hr align="center" size="2" width="100%" color="grey">

 	
	</b></font>
	
	<font face="Rockwell" color="white" size="6">
<br>
&nbsp;<label>Superior Room</label>
<hr align="center" size="2" width="100%" color="grey">
</font>
<font face="Monotype Corsiva" color="white" size="5">
<table cellspacing="7" cellpadding="7">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Breakfast Included</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.7000.00</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Parking</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="OnButton6();" style="vertical-align:left; width: 110px; background-color:; height:50px; font-size:14pt;"   ><span>Book</span></button><td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Internet</td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Twin Bed</td>

</tr>

</font>
<br>
<img src="eroom.jpg" height="200" width="300" align="left">
</table>
<br>
<font face="Rockwell" color="white" size="6"><b>
<hr align="center" size="2" width="100%" color="grey">

 	
	</b></font>
	
	
	
	<font face="Rockwell" color="white" size="6">
<br>
&nbsp;<label>Executive Room</label>
<hr align="center" size="2" width="100%" color="grey">
</font>
<font face="Monotype Corsiva" color="white" size="5">
<table cellspacing="7" cellpadding="7">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Breakfast and Dinner Included</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.11000.00</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Parking</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="OnButton7();" style="vertical-align:left; width: 110px; background-color:; height:50px; font-size:14pt;"   ><span>Book</span></button><td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Internet</td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;King Bed</td>

</tr>

</font>
<br>
<img src="proom.jpg" height="200" width="300" align="left">
</table>
<br>
<font face="Rockwell" color="white" size="6"><b>
<hr align="center" size="2" width="100%" color="grey">

 	
	</b></font>
	
	
	<font face="Rockwell" color="white" size="6">
<br>
&nbsp;<label>Royal Room</label>
<hr align="center" size="2" width="100%" color="grey">
</font>
<font face="Monotype Corsiva" color="white" size="5">
<table cellspacing="7" cellpadding="7">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Breakfast and Dinner Included</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.15000.00</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Parking</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="OnButton8();" style="vertical-align:left; width: 110px; background-color:; height:50px; font-size:14pt;"   ><span>Book</span></button><td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Free Internet</td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;King Bed</td>

</tr>

</font>
<br>
<img src="rroom.jpg" height="200" width="300" align="left">
</table>
<br>
<font face="Rockwell" color="white" size="6"><b>
<hr align="center" size="2" width="100%" color="grey">

 	
	</b></font>
	
	
	
</div>


</br>




</body>
</html>