<html>
	<head>
	<meta http-equiv = "refresh" content = "0.1; url = first_page.html" />
	</head>
	<body>
<?php
$user = "root";
$pass = "";
$db = "auction";

$conn = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
if($conn)
echo "database connected";
$Name = $_POST['name'];
$Password = $_POST['pass'];
$Mail = $_POST['mail'];
$Gender = $_POST['Gender'];
$id=$_POST['id'];

$sql = "INSERT INTO user_data VALUES ('$Name', '$Mail', '$Password', '$Gender','$id')";

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