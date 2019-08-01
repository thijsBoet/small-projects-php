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
    <form method="POST">
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
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
      
        <?php

        function calculateBMI($weight, $height){
          $bmi = ($weight / $height / $height) * 10000;
          $bmiRounded = round($bmi, 1);

          echo "<h2 style='color: ${calculateBMIColor($bmiRounded)}'>Your BMI is ${bmiRounded}</h2>";
        }

        function calculateBMIColor($bmiRounded){
          if($bmiRounded <= 18.4){
            echo "#375FEF";
          }
          if($bmiRounded >= 18.5 && $bmiRounded <= 24.9){
            echo "#39C117";
          }
          if($bmiRounded >= 25 && $bmiRounded <= 29.9){
            echo "#DFAE23";
          }
          if($bmiRounded >= 30 && $bmiRounded <= 39.9){
            echo "#F68A33";
          }
          else {
            echo "#330906";
          }
        }

        function calculateIdealWeight($height){

        }

        if(isset($_POST['calculate'])){
          if (!isset($_POST['weight'])) {
            return 'Please enter your weight';
            exit();
          }
          if (!isset($_POST['height'])) {
            return 'Please enter your height';
            exit();
          }
          $weight = filter_var(htmlentities(floatval($_POST['weight'])),FILTER_SANITIZE_NUMBER_FLOAT);

          $height = filter_var(htmlentities(floatval($_POST['height'])),FILTER_SANITIZE_NUMBER_FLOAT);

          calculateBMI($weight, $height);
        }

        ?>
      
    </div>
    </div>
  </div>
</body>
</html>