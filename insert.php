<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$id = $_POST['id'];

$sql = "INSERT INTO guestboook (Name , Comment) VALUES ('$name', '$comment')";
$sql = "DELETE FROM guestboook WHERE id=$id";



if (mysqli_query($conn, $sql)) {
    echo "Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
mysqli_close($conn);
?>
