<html>
<head>
<title>SUCCESS</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="font-mail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card md-3 col-sm-12">
                    <?php

                    $conn = mysqli_init();
                    mysqli_real_connect($conn, 'apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab', 3306);
                    if (mysqli_connect_errno($conn))
                    {
                        die('Failed to connect to MySQL: '.mysqli_connect_error());
                    }

                    $ID = $_POST['ID'];


                    $sql = "DELETE FROM guestboook WHERE ID='$ID' ORDER BY ID DESC LIMIT 1";



                    if (mysqli_query($conn, $sql)) {
                        echo "Successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                    ?>
                    <a href="index.php" class="btn btn-light">Home</a>
                </div>
            </div>
        </div>
    </div> 
</body>
