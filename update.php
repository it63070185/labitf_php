<?php
	$conn = mysqli_connect('apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab');

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$id = $_POST['id'];

    $sql = 'UPDATE guestboook SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
      
            <h3>
                <?php
                    if (mysqli_query($conn, $sql)) {
                        echo "Update Completed";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                ?>
            </h3>
            <a href="index.php" class="btn btn-success mt-3">OK</a>
       
    </div>
</body>

</html>
