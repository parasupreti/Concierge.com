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
  height:65%;
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
    background-size:1366px 768px;
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
{window.location='try3.html';
}
function OnButton4()
{window.location='contact.html';
}
function OnButton8()
{window.location='searchpc.html';
}

</script>
</head>
<body>

<button class="button" style="vertical-align:left" onclick="OnButton1();"><span>Home</span></button>
<button class="buttonsel" style="vertical-align:left" onclick="OnButton2();"><span>Hotels</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton3();"><span>Search</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton4();"><span>Contact Us</span></button>
<br><br>

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
$e='0';
$name=$_POST["name"];
$mob=$_POST["Phone"];
$email=$_POST["email"];
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];
$cardno=$_POST["card_no"];
$expdate=$_POST["expirydate"];
$hid=$_SESSION['hid'];
$hname=$_SESSION['hname'];
$roomtype=$_SESSION['rtype'];



$sql = "INSERT INTO hcustomer(cust_name,custid,hid,mob_no,email,category,card_deatil,card_expiry,amount_paid,checkin,checkout)
VALUES ('$name','',$hid,$mob,'$email','$roomtype','$cardno','$expdate',2000,'$checkin','$checkout')";
$result = $conn->query($sql);


$sqlquerysa="select custid from hcustomer where cust_name='$name' && card_deatil='$cardno'&& hid=$hid && email='$email' && card_expiry='$expdate'&& checkin='$checkin'&&checkout='$checkout'";
$resultsa = $conn->query($sqlquerysa);
while($row=$resultsa->fetch_assoc())
   {
      
	 $cid=$row["custid"];
	  
	}


$sqlquery2="select extract(day from checkin) as dayin from hcustomer where custid=$cid";
$result2 = $conn->query($sqlquery2);
while($row=$result2->fetch_assoc())
   {
      
	 $dayin=$row["dayin"];
	  
	}
$sqlquery3="select extract(month from checkin) as monthin from hcustomer where custid=$cid";
$result3 = $conn->query($sqlquery3);
while($row=$result3->fetch_assoc())
   {
      
	 $monthin=$row["monthin"];
	  
	}   
	
	
	$sqlquery4="select extract(day from checkout) as dayout from hcustomer where custid=$cid";
$result4 = $conn->query($sqlquery4);
while($row=$result4->fetch_assoc())
   {
      
	 $dayout=$row["dayout"];
	  
	}

$sqlquery5="select extract(month from checkout) as monthout from hcustomer where custid=$cid";
$result5 = $conn->query($sqlquery5);
while($row=$result5->fetch_assoc())
   {
      
	 $monthout=$row["monthout"];
	  
	}   
	
	
	
	


	/*echo "$dayin <br>"; 
	echo "$dayout <br>";
    echo "$monthin<br> ";
	echo "$monthout";*/
	$xyz=0;
	
if ($monthin==12){
  $dayin=$dayin-4;}
  else if($monthin=='1'){$dayin=$dayin+27;}
if ($monthout==12){
  $dayout=$dayout-4;}
  else if($monthout=='1'){$dayout=$dayout+27;}
  
  
  if($hid==90){
   $cproom=0;$csroom=0;$crroom=0;$ceroom=0;
     $sqlquery6="select * from deh_ananda where date>='$dayin' && date<='$dayout'";
	 $result6 = $conn->query($sqlquery6);
	  while($row=$result6->fetch_assoc())
   {
      if($roomtype=='premier'){
	 $d=$row["proom"];
	     if($d>=10){$cproom=1;}   }
	 
	 if($roomtype=='superior'){
	 $d=$row["sroom"];
	     if($d>=10){$csroom=1;}   }
		 
		 if($roomtype=='exec'){
	 $d=$row["eroom"];
	     if($d>=10){$ceroom=1;}   }
		 
		 if($roomtype=='royal'){
	 $d=$row["rroom"];
	     if($d>=10){$crroom=1;}   }
	 
	}
	
  if($roomtype=='premier'){
     if($cproom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_ananda set proom=proom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 
	 
	 }
  }
  
  if($roomtype=='superior'){
     if($csroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_ananda set sroom=sroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='exec'){
     if($ceroom==1)
	 { $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_ananda set eroom=eroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	
	 
	 }
  }
  
  if($roomtype=='royal'){
     if($crroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_ananda set rroom=rroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
 } 
 
 
 
 
 
else if($hid==91){
   $cproom=0;$csroom=0;$crroom=0;$ceroom=0;
     $sqlquery6="select * from de_sheraton where date>='$dayin' && date<='$dayout'";
	 $result6 = $conn->query($sqlquery6);
	  while($row=$result6->fetch_assoc())
   {
      if($roomtype=='premier'){
	 $d=$row["proom"];
	     if($d>=10){$cproom=1;}   }
	 
	 if($roomtype=='superior'){
	 $d=$row["sroom"];
	     if($d>=10){$csroom=1;}   }
		 
		 if($roomtype=='exec'){
	 $d=$row["eroom"];
	     if($d>=10){$ceroom=1;}   }
		 
		 if($roomtype=='royal'){
	 $d=$row["rroom"];
	     if($d>=10){$crroom=1;}   }
	 
	}

  if($roomtype=='premier'){
     if($cproom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update de_sheraton set proom=proom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='superior'){
     if($csroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update de_sheraton set sroom=sroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='exec'){
     if($ceroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update de_sheraton set eroom=eroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='royal'){
     if($crroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update de_sheraton set rroom=rroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
 } 
 
 
 
 
 
 
 else if($hid==92){
   $cproom=0;$csroom=0;$crroom=0;$ceroom=0;
     $sqlquery6="select * from deh_madhuban where date>='$dayin' && date<='$dayout'";
	 $result6 = $conn->query($sqlquery6);
	  while($row=$result6->fetch_assoc())
   {
      if($roomtype=='premier'){
	 $d=$row["proom"];
	     if($d>=10){$cproom=1;}   }
	 
	 if($roomtype=='superior'){
	 $d=$row["sroom"];
	     if($d>=10){$csroom=1;}   }
		 
		 if($roomtype=='exec'){
	 $d=$row["eroom"];
	     if($d>=10){$ceroom=1;}   }
		 
		 if($roomtype=='royal'){
	 $d=$row["rroom"];
	     if($d>=10){$crroom=1;}   }
	 
	}

  if($roomtype=='premier'){
     if($cproom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_madhuban set proom=proom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='superior'){
     if($csroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_madhuban set sroom=sroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='exec'){
     if($ceroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_madhuban set eroom=eroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='royal'){
     if($crroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_madhuban set rroom=rroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
 } 
 
 
 
 
 
 
 else if($hid==93){
   $cproom=0;$csroom=0;$crroom=0;$ceroom=0;
     $sqlquery6="select * from deh_softel where date>='$dayin' && date<='$dayout'";
	 $result6 = $conn->query($sqlquery6);
	  while($row=$result6->fetch_assoc())
   {
      if($roomtype=='premier'){
	 $d=$row["proom"];
	     if($d>=10){$cproom=1;}   }
	 
	 if($roomtype=='superior'){
	 $d=$row["sroom"];
	     if($d>=10){$csroom=1;}   }
		 
		 if($roomtype=='exec'){
	 $d=$row["eroom"];
	     if($d>=10){$ceroom=1;}   }
		 
		 if($roomtype=='royal'){
	 $d=$row["rroom"];
	     if($d>=10){$crroom=1;}   }
	 
	}

  if($roomtype=='premier'){
     if($cproom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_softel set proom=proom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='superior'){
     if($csroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_softel set sroom=sroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='exec'){
     if($ceroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_softel set eroom=eroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='royal'){
     if($crroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_softel set rroom=rroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
 } 
 
 
 
 
 
 
 else if($hid==94){
   $cproom=0;$csroom=0;$crroom=0;$ceroom=0;
     $sqlquery6="select * from deh_lemontree where date>='$dayin' && date<='$dayout'";
	 $result6 = $conn->query($sqlquery6);
	  while($row=$result6->fetch_assoc())
   {
      if($roomtype=='premier'){
	 $d=$row["proom"];
	     if($d>=10){$cproom=1;}   }
	 
	 if($roomtype=='superior'){
	 $d=$row["sroom"];
	     if($d>=10){$csroom=1;}   }
		 
		 if($roomtype=='exec'){
	 $d=$row["eroom"];
	     if($d>=10){$ceroom=1;}   }
		 
		 if($roomtype=='royal'){
	 $d=$row["rroom"];
	     if($d>=10){$crroom=1;}   }
	 
	}

  if($roomtype=='premier'){
     if($cproom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_lemontree set proom=proom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='superior'){
     if($csroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_lemontree set sroom=sroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='exec'){
     if($ceroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_lemontree set eroom=eroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='royal'){
     if($crroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_lemontree set rroom=rroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
 } 
 
 
 
 
 
 else if($hid==95){
   $cproom=0;$csroom=0;$crroom=0;$ceroom=0;
     $sqlquery6="select * from deh_solitaire where date>='$dayin' && date<='$dayout'";
	 $result6 = $conn->query($sqlquery6);
	  while($row=$result6->fetch_assoc())
   {
      if($roomtype=='premier'){
	 $d=$row["proom"];
	     if($d>=10){$cproom=1;}   }
	 
	 if($roomtype=='superior'){
	 $d=$row["sroom"];
	     if($d>=10){$csroom=1;}   }
		 
		 if($roomtype=='exec'){
	 $d=$row["eroom"];
	     if($d>=10){$ceroom=1;}   }
		 
		 if($roomtype=='royal'){
	 $d=$row["rroom"];
	     if($d>=10){$crroom=1;}   }
	 
	}

  if($roomtype=='premier'){
     if($cproom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_solitaire set proom=proom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='superior'){
     if($csroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_solitaire set sroom=sroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='exec'){
     if($ceroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_solitaire set eroom=eroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
  
  if($roomtype=='royal'){
     if($crroom==1){
	 $sqlqueryas="delete from hcustomer where custid=$cid";
	 $resultas = $conn->query($sqlqueryas); 
	 echo "<script type='text/javascript'>alert('no rooms available for given dates')</script>"; echo "<script type='text/javascript'>window.location = 'try2.html'</script>";}
  else{
   for($xyz=$dayin;$xyz<=$dayout;$xyz++){
     $sqlquery7="update deh_solitaire set rroom=rroom+1 where date='$xyz'";
	 $result7 = $conn->query($sqlquery7);}
	 }
  }
 } 
 
 if($roomtype=='premier')
{$sqlquery="update hotel  set premier=premier-1 where hid='$hid' ";
$result1 = $conn->query($sqlquery);}
else if($roomtype=='superior')
{$sqlquery="update hotel  set superior=superior-1 where hid='$hid' ";
$result1 = $conn->query($sqlquery);}
else if($roomtype=='exec')
{$sqlquery="update hotel  set exec=exec-1 where hid='$hid' ";
$result1 = $conn->query($sqlquery);}
else if($roomtype=='royal')
{$sqlquery="update hotel  set royal=royal-1 where hid='$hid' ";
$result1 = $conn->query($sqlquery);}
 
 
 echo "</br><font face='Rockwell' color='yellow' size='6'><br><br><br>&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp; Congratulation!!! Your Hotel room is BOOKED</font>";
 echo "<br><br><br><font face='Rockwell' color='yellow' size='6'>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;Your CutomerID is $cid</font>";
 
	
?>




<font face="Rockwell" color="yellow" size="6">
<br><br>
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<label>Click to see your booking</label>
<button class="button"  onclick="OnButton8();" style="vertical-align:left; width: 110px; background-color:; height:50px; font-size:14pt;"   ><span>CHECK</span></button>
</font>
</div>
</body>
</html>