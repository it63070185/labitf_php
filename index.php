<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="font-mail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card md-3 col-sm-12">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <h3>HOME</h4>
                        <a href="form.php" class="btn btn-success">ADD</a>
                    </div>
                    <?php
                    $conn = mysqli_init();
                    mysqli_real_connect($conn, 'apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab', 3306);
                    if (mysqli_connect_errno($conn))
                    {
                        die('Failed to connect to MySQL: '.mysqli_connect_error());
                    }
                    $res = mysqli_query($conn, 'SELECT * FROM guestboook');
                    ?>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                            <th width="100"> <div align="center">Name</div></th>
                            <th width="350"> <div align="center">Comment </div></th>
                            <th width="150"> <div align="center">Action </div></th>
                            </tr>
                        <?php
                        while($Result = mysqli_fetch_array($res))
                        {
                        ?>
                            <tr>
                            <td><?php echo $Result['Name'];?></div></td>
                            <td><?php echo $Result['Comment'];?></td>
                            <td>
                                <a href ="delete.php?ID=<?php echo $Result['ID'];?>" >DELETE</a>
                                <a href ="formup.php?ID=<?php echo $Result['ID'];?>" >UPDATE</a>
                            </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </table>
                        <?php
                        mysqli_close($conn);
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>            
    </div>
</body>
</html>
