<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>CONCEIRGE</title>
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
  left:16.5%;
  width:60%;
  height:80%;
  margin: 60px;
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
    background-size:1366px 1368px;
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
function OnButton8()
{window.location='change1.php';
}
function OnButton9()
{var r = confirm("Are you sure you want to cancel your booking?");
if (r == true) {
window.location='cancel.php';
 }
else { }

}

</script>
</head>
<body>

<button class="button" style="vertical-align:left" onclick="OnButton1();"><span>Home</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton2();"><span>Hotels</span></button>
<button class="buttonsel" style="vertical-align:left" onclick="OnButton3();"><span>Search</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton4();"><span>Contact Us</span></button>
<br>

<div class="transbox">
<font face='Rockwell' color='yellow' size='7'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>BOOKING DETAILS</label>
</font>
<?php
$username="root";
$server="localhost";
$dbname="db1";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}
$cid=$_POST["cid"];
 $_SESSION['cid']=$cid;


$sqlquerysa="select * from hcustomer where custid=$cid";
$resultsa = $conn->query($sqlquerysa);
if($resultsa->num_rows>0)
   {
while($row=$resultsa->fetch_assoc())
   {
      $name=$row["cust_name"];
	  $cid=$row["custid"];
	  $hid=$row["hid"];
	  $mob=$row["mob_no"];
	  $email=$row["email"] ;
	  $cardno=$row[ "card_deatil"];
	  $checkin=$row["checkin"];
	  $checkout=$row["checkout"];
	  $type=$row["category"];
	 
	  
	}
	}
	else{
	echo "<script type='text/javascript'>alert('Soory!! No booking exists for this CustomerID')</script>"; 
	echo "<script type='text/javascript'>window.location = 'searchpc.html'</script>";
	}
	
	
	
	$sqlqueryss="select * from hotel where hid=$hid";
$resultss = $conn->query($sqlqueryss);
while($row=$resultss->fetch_assoc())
   {
      $hname=$row["hname"];
	  $cid=$row["city"];
	  
	  
	  
	  echo "<font face='Rockwell' color='yellow' size='5'>";
	  echo "<br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Name:          $name";
	  echo "<br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Hotel City:    $cid";
      echo "<br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Hotel Name :   $hname";
	  echo "<br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;E-Mail :       $email";
	  echo "<br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Card No. :     $cardno";
	  echo "<br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;CheckIN :      $checkin";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='button'  onclick='OnButton9();' style='vertical-align:right; width: 130px; background-color:; height:50px; font-size:14pt;'><span>CANCEL</span></button>";
	  
	  echo "<br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;CheckOUT:      $checkout";
	  echo " <form method='post' action='change1.html'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='button'  style='vertical-align:right; width: 130px; background-color:; height:50px; font-size:14pt;'><span>CHANGE</span></button></form>";
	  
	  
	  
	}
?>

<!--
<button class="button"  onclick="OnButton8();" style="vertical-align:left; width: 110px; background-color:; height:50px; font-size:14pt;"   ><span>CHECK</span></button>
</font>
-->
</div>
</body>
</html>