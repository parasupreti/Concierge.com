<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


include("dbconnect.php");

if(!isset($_post['search']))
{
header("Location:t1.php");
}
$search_sql="select * from hotel where city='".$_post['search']."' ";
$search_query=mysql_query($search_sql);
if(mysql_num_rows($search_query)!=0)
{
$search_rs=mysql_fetch_assoc($search_query);
}

?>
<html>
<head>
<title>haha</title>
</head>
<body>
<p>Search results</p>
<?php if(mysql_num_rows($search_query)!=0){
do{  ?>

<p><?php echo $search_rs['name']; ?></p>

<?php  }while($search_rs=mysql_fetch_assoc($search_query));
}else{
echo "No results found";
}


?>
</body>
</html>

