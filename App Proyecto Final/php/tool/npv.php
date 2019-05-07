<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/functional/npv.js"></script>

    <title>Net Present Value</title>

  </head>
  <body onLoad="HideCalculateButton()">

      <div class="center">

        <p>Number of periods :</p>
        <input type="number" name="" value="" id="total_periods">
        <br>
        <p>Principal :</p>
        <input type="number" name="" value="" id="principal">
        <br>
        <p>Interest Rate (%) :</p>
        <input type="number" name="" value="" id="interest_rate">
        <br>
        <p>Tax Rate (%) :</p>
        <input type="number" name="" value="" id="tax_rate">
        <br>
        <p>Salvage Value</p>
        <input type="number" name="" value="" id="salvage_value">
        <br><br>
        <div id="PaybackTable" class="tb"></div>
        <br>
        <div class="">
          <p id = "finalNpvValue"></p>
        </div>
        <br>
        <div class="">
          <p id = "investmentValue"></p>
        </div>
        <br>
        <div class="">
          <a type="button" name="Enter" onclick="addTable()" class="btn btn-primary btn-learn" id="btn_periods">Enter Periods</a>
          <a type="button" name="PB" onclick="calculatePaybackPeriod()" class="btn btn-primary btn-learn" id="btn_calculate">Calculate</a>
        </div>

      </div>

  </body>

  <style>
  .center{
    margin-left: 10%;
    margin-top: 4%;
  }
  .tb{
    width: 100%;
  }
  .bt{
    width: 10%;
    height: 30px;

  }
  td
  {
      padding:0 5px 0 0; /* Only right padding*/
  }
  </style>

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

</html>
