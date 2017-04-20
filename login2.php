<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>hotellist</title>
<script type="text/javascript">

function OnButton1()
{window.location='try.html';
}
function OnButton2()
{window.location='try2.html';
}
function OnButton3()
{window.location='cab1.html';
}
function OnButton4()
{window.location='home1.html';
}
</script>
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
  height:90%;
  margin: 60px;
  background-color: #0d0d0d;
  opacity:0.6;
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

    background: url("cb1.jpg");
    background-size: 1366px 768px;
    background-repeat: no-repeat;
    padding-top:
}

</style>
</head>
<body link="white" vlink="white" >
<div class="transbox">
<?php 
$username="root";
$server="localhost";
$dbname="db1";
$conn=new mysqli($server,$username,"",$dbname);
if($conn->connect_error)
{
 echo "fail connection";
}

$city1=$_POST["origin"];
$city2=$_POST["destination"];
  $e='0';
//$pwd=$_POST["password"];
//$set=$_POST["member"];
//if($set==="STUDENT")
$sql_query="select * from dealer where city='$city1'";
$result=$conn->query($sql_query);
echo "</br></br>";
if($result->num_rows>0)
   {
   while($row=$result->fetch_assoc())
   {
   
       $e=$e+'1';
	 $d=$row["name"];
	 echo "</br>";
     echo "<font face='WildWest' size='5' color='white'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";	 echo " $e.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='4.php'>$d</a></br>";
	 $_SESSION["cname"] = "$d";
	
	  
	  //echo $hcity;
	}
  }
//else
	//{echo "<script type='text/javascript'>prompt('WRONG PASSWORD OR USERNAME')</script>";
	//}
		
	
	
	
	
	
?>



</div>
<button class="button" style="vertical-align:middle" onclick="OnButton1();"><span>Home</span></button>
<button class="button" style="vertical-align:middle" onclick="OnButton2();"><span>Hotels</span></button>
<button class="buttonsel" style="vertical-align:middle" onclick="OnButton3();"><span>Car Rental</span></button>
<button class="button" style="vertical-align:middle" onclick="OnButton4();"><span>Contact Us</span></button>
</body>

</html>




