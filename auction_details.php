<html>
  <HEAD> 
    <style>
      body {
            background-image: url('bid_in.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
  table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
              }
              
              li {
                float: right;
              }
              
              li a {
                display: block;
                padding: 8px;
                background-color: #dddddd;
              }
</style>
  </HEAD>
    <body>  
    <ul>
            <li><a href="auction_item.html">Host an Auction</a></li>
            <li><a href="close.html">Close auction</a></li>
            <li><a href="Bid.html">Place Bid</a></li>
            <li><a href="sign_out.html">Sign Out</a></li>
          </ul>
      <h1 style="color:red"><center><marquee><u>Auction Details</u></marquee></center></h1>
            <?php
        $user = "root";
        $pass = "";
        $db = "auction";
        $conn = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
        if($conn)
        echo "database connected";
        $sql="SELECT * FROM auction_details";
        $rt=mysqli_query($conn,$sql);
        ?>
        <table>
            <tr>
            <th> ID</th>
            <th> Item </th>
            <th> Initial price</th>
            <th> Current Bid</th>
            <th> Person who has Bid</th>         
            </tr>
            
            <?php
            if(mysqli_num_rows($rt)>0)
            {
                  while($row=mysqli_fetch_array($rt))
                  {  
                    ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td> 
                  <td><?php echo $row['Item_name']; ?></td> 
                  <td><?php echo $row['Initial_price']; ?></td>
                  <td><?php echo $row['Bid_amount']; ?></td>
                  <td><?php echo $row['bid_Email']; ?></td>  
                  </tr>
                <?php

                }
                }
                 ?>
            
        </table>
    </body>
</html>