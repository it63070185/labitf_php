<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $Result['ID'];


$sql = "DELETE FROM guestboook WHERE ID='$ID'";



if (mysqli_query($conn, $sql)) {
    echo "Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
