<?php include 'config.php'?>
<?php
$conn = mysqli_connect($dbServerName , $dbUsername , $dbPassword , $dbName );

if (!$conn)
          {
          die("Connection Failed:".mysqli_connect_error());
          }
 else
    {
      // echo "Connection Successful";
    }
 ?>
