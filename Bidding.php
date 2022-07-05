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
$email=$_POST['email'];
$id=$_POST['id'];
$bid_amount=$_POST['amount'];

$sql="SELECT * FROM auction_details WHERE id='$id' AND Email!='$email'";
$rt=mysqli_query($conn,$sql);
$ft=mysqli_fetch_assoc($rt);
if($ft['C']=='0'){
if($ft['Initial_price']<$bid_amount && $ft['Bid_amount']<$bid_amount){
    $sql="UPDATE auction_details SET Bid_amount='$bid_amount', bid_Email= '$email' WHERE id='$id'";
    $rs = mysqli_query($conn, $sql);
if($rs)
{
	echo " Bid recorded";
}
}
else{
    echo "inappropriate bid_amount";
}
}
else{
    echo "auction_closed";
}
mysqli_close($conn);

?>
    </body>
</html>