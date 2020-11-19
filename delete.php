<?php
$conn = mysqli_connect('apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab');
$sql = 'DELETE FROM guestboook WHERE ID = ' . $_GET['ID'] . '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">

        <h3>
            <?php
            if (mysqli_query($conn, $sql)) {
                echo "Delete Completed";
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
