<html>
    <head>
    <meta http-equiv = "refresh" content = "0.1; url = auction_details.php" />
    </head>
    <body>
<?php
$user = "root";
$pass = "";
$db = "auction";

$conn = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
if($conn)
echo "database connected";
$Email = $_POST['email'];
$Password = $_POST['pass'];
$Name = $_POST['name'];
$Category = $_POST['cate'];
$Initial_price = $_POST['price'];
$id=$_POST['id'];
$sql = "INSERT INTO auction_details VALUES ('$Email', '$Password', '$Name', '$Initial_price', '0', '0','$Category',' ','$id')";

// insert in database 
$rs = mysqli_query($conn, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
mysqli_close($conn);
?>
	</body>
</html>