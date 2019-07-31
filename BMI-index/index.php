<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculate your BMI</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <header class="mt-3 text-center row">
    <div class="col-sm-10 align-right">
      <h2 class="text-secondary">Calculate Body Mass Index</h2>
    </div>
  </header>
  <div class="container mt-3">
    <form action="calculateBMI.php" method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight">Weight in kg.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter your weight in kilograms.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height">Height in cm.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="height" name="height" placeholder="Enter your height in centimeters.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" class="btn btn-primary btn-block" name="calculate">Calculate</button>
        </div>
      </div>
    </form>
    <div class="col-sm-10 align-right">
      <h2 class="text-secondary">
        <?php 
          calculateBMI($weight, $height)
        ?>
      </h2>
    </div>
  </div>
</body>
</html>