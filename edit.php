<?php
    $conn = mysqli_connect('apirat.mysql.database.azure.com', 'it63070185@apirat', 'UEKyfj18', 'ITFlab');

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
      <title>Comment Form</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>

  <body>
      <div class="container">
          <div class="card-header bg-primary text-white d-flex justify-content-between">
           <h3>EDIT</h3>
           <a href="index.php" class="btn btn-light">BACK</a>
          </div>
          <form action="update.php" method="post" id="CommentForm">
              <div class="form-group mt-5">
                  <input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
                  <label class="m-3" for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="idName" value="<?php echo $data['Name'];?>">
                  <label class="m-3" for="comment">Comment</label>
                  <textarea rows="5" class="form-control" cols="20" name="comment" id="idComment" ><?php echo $data['Comment'];?></textarea><br>
                  <label class="m-3" for="link">Link</label>
                  <input type="text" class="form-control" name="link" id="idLink" value="<?php echo $data['Link'];?>">
                  <input class="btn btn-primary mt-5" type="submit" id="commentBtn">
              </div>
          </form>
      </div>
  </body>

  </html>
