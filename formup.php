<?php
    $conn = mysqli_real_connect($conn, 'apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab', 3306);

    $id = $_GET['ID'];

    $sql = 'SELECT * FROM guestboook WHERE ID = ' . $id . '';
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        header('Location: index.php');
    } else {
        $data = mysqli_fetch_assoc($query);
    }
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="font-mail">
    <div class="container">
        <div class="row-md-5 row-sm-12">
            <div class="col">
                <div class="card md-3 col-sm-12">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <h3>Edit</h3>
                        <a href="index.php" class="btn btn-light">Back</a>
                    </div>
                    <div class="card-body">
                          <form action = "update.php" method = "post" id="CommentForm" >
                                <input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
                                <label class="m-3" for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="idName" value="<?php echo $data['Name'];?>">
                                <label class="m-3" for="comment">Comment</label>
                                <textarea rows="5" class="form-control" cols="20" name="comment" id="idComment" ><?php echo $data['Comment'];?></textarea><br> 
                                <input class="btn btn-success" type="submit" id="commentBtn">
                            </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
