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
<?php require_once 'process.php'; 

$stmt = $pdo->query("SELECT * FROM data");
echo $stmt->execute();
?>

  <div class="container">
    <div class="row justify-content-center">
      <form action="process.php" method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" placeholder="Enter your name." id="name">
        </div>
        <?php if (!$nameIsset) {
          echo '<div class="alert alert-primary" role="alert">Please enter a name.</div';
          exit();
        } ?>
        <div class="form-group">
          <label for="location">Location</label>
          <input class="form-control" type="text" name="location" placeholder="Enter your location." id="location">
        </div>
        <?php if (!$locationIsset) {
          echo '<div class="alert alert-primary" role="alert">Please enter a location.</div';
          exit();
        } ?>
        <div class="form">
          <button class="btn btn-primary" type="submit" name="save">Save</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>