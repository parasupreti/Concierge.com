 <?php
session_start();
$b=$_GET['id1'];
$_SESSION['rtype']=$b;
?>

 <!doctype html>
<html>
<head>
<title>Concierge:Payment </title>
<style> 

.insel /*for border radius in dropdown and input box */
{
    
    border-radius: 10px;
    
}

select:focus { 
    background-color: #ffdead;
}
input:focus { 
    background-color: #ffdead;
}
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
  height:225%;
  margin: 0px;
  background-color:rgba(13,13,13,0.5);
  filter:alpha(opacity=60);
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
    background-size:1950px 1780px;
    background-repeat: no-repeat;
    background-attachment: fixed;

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
function enableButton2() {
            document.getElementById("go").disabled = false;
}
function check()
{var StartDate= document.getElementById('sdate').value;
  var EndDate= document.getElementById('edate').value;
 
  if(StartDate!= '' && EndDate!= '' && StartDate> EndDate)
    {
    alert("Please ensure that the Checkout Date is greater than or equal to the Checkin Date.");
    return false;
    }
	return true;
}

function OnButton6()
{window.location='blah.php';
}

</script>
</head>
<body>
<button class="button" style="vertical-align:left" onclick="OnButton1();"><span>Home</span></button>
<button class="buttonsel" style="vertical-align:left" onclick="OnButton2();"><span>Hotels</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton3();"><span>Search</span></button>
<button class="button" style="vertical-align:left" onclick="OnButton4();"><span>Contact Us</span></button>

<div class="transbox">

<form action="blah.php" method="post">
	
  <font face="Arial" color="white" size="6">
   <br><br>

&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  <label>Traveller information:</label>
  <br><br>
  <font face="Arial" color="grey" size="5">
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>Name</label><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input type="text" name="name" required="required" class="insel" style="width: 400px; height:45px; font-size:17pt;">
  <br><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>Contact number</label><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input type="number" name="Phone" required="required"  min="7000000000" max="9999999999" class="insel" maxlength="10" style="width: 400px; height:45px; font-size:17pt;">
  <br><br>

    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>Email</label><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input type="email" name="email" required="required" class="insel" style="width: 400px; height:45px; font-size:17pt;">
  <br><br>
  

    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>Checkin</label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>Checkout</label><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input type="date" name="checkin" id="sdate" min="2015-12-05" max="2016-01-04"  required   class="insel" style="width: 200px; height:45px; font-size:17pt;">
 
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input type="date" name="checkout" id="edate" min="2015-12-05" max="2016-01-04"  required  class="insel" style="width: 200px; height:45px; font-size:17pt;">
  
  <br>

  <font face="Arial" color="white" size="6">
   <br>

&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  <label>Payment:</label>
  <br><br>
   <font face="Arial" color="white" size="5">
   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <label>We accept:</label>
   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
   <img src="visa.jpg" alt="Visa" height="42" width="60">
   <img src="mcard.jpg" alt="MasterCard" height="42" width="60">
   <img src="amerex.jpg" alt="American Express" height="42" width="60">
   <img src="mae.jpg" alt="Maestro" height="42" width="60">
   <img src="rupay.jpg" alt="Rupay" height="42" width="60">

  <br><br>
  <font face="Arial" color="grey" size="5">
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>Debit/Credit card number (16 characters)</label><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input type="text" name="card_no" required="required" pattern=".{16,16}" maxlength="16" class="insel" style="width: 400px; height:45px; font-size:17pt;">
  <br><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>Expiration date</label><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
   <input type="date" name="expirydate" min="2015-12-05"  required class="insel" style="width: 200px; height:45px; font-size:17pt;">
<br> <br>
  
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <label>CVV</label><br>
  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
  <input type="password" name="cvv" required="required"  maxlength="3" class="insel" style="width: 80px; height:45px; font-size:32pt;">
  <br><br>
  <font face="Arial" color="white" size="5">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="terms" onclick="enableButton2();" value="Accept">By selecting to complete this booking I acknowledge that I have read&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; and accept the Rules & Restrictions, Terms of Use and Privacy &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Policy.  
 <br> <br>
   <form action="blah.php" method="post">
   <button class="button" style="vertical-align:left" id="go" onclick="return(check());" disabled><span>Go!</span></button>
   
   <br><br>
<font face="Arial" color="white" size="5">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="sec2.jpg" alt="Rupay" height="20" width="20">
 We use secure transmission and encrypted storage to protect &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; your personal information.

  
</form>
</div>


</br>




</body>
</html>