<?php require_once 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php require_once 'process.php'; ?>
  <div class="row justify-content-center">
    <form action="process.php" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Enter your name." id="name">
      </div>
      <div class="form-group">
        <label for="location">Location</label>
        <input class="form-control" type="text" name="location" placeholder="Enter your location." id="location">
      </div>
      <div class="form">
        <button class="btn btn-primary" type="submit" name="save">Save</button>
      </div>
    </form>
  </div>
</body>
</html>