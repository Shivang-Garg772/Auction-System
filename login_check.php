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
$name=$_POST['name'];
$pass=$_POST['password'];
$email=$_POST['email'];
$sql="SELECT Password FROM user_data WHERE Email='$email'";
$rt=mysqli_query($conn,$sql);
$ft=mysqli_fetch_assoc($rt);
if($ft['Password']==$pass){
    //call when you return, am unaware of what to put here next
    echo "log in";
}
?>
    </body>
</html>