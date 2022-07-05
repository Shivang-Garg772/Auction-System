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
$id=$_POST['id'];
$email=$_POST['email'];

$sql="UPDATE auction_details SET C=1 WHERE id=$id AND Email='$email'";
$rt=mysqli_query($conn,$sql);
if($rt){
    echo "auction closed";
}
mysqli_close($conn);
?>
    </body>
</html>
