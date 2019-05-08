<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<script src="js/dataManager.js"></script>


	</head>
	<body onLoad="getElements()">

		<!--Top Nav Bar-->
    <!--<div style="overflow: hidden;background-color:white;top:0;margin-left: 15px;width: 100%;height:40px;">
		<a id="evaluatorNameDisplay" style="position:absolute;top:1%;"></a>
		<a id="projectNameDisplay" style="position:absolute;right:0;top:1%;right:50%;"></a>
    </div>-->

		<!--Data Input-->
		<div id="infoWindow">
			<center>
                <form id="adminpro-form" class="adminpro-form" target="_self" action="dashboard.php" method="POST">
                    <div>
                        <p>Evaluator Name : </p>
                        <input type="text" name="evaluatorName" value="<?php echo "".$user->username; ?>" disabled>
                    </div>
                    <div>
                        <p>Enter Project Name : </p>
                        <input type="text" name="projectName">
                    </div>
                    <div>
                        <p>Select Project Type : </p>
                        <select name="projectType">
                            <option value="production">Production</option>
                            <option value="rnd">R&D (Research and Development)</option>
                            <option value="purchasing">Purchasing</option>
                            <option value="marketingS">Marketing (including the selling function)</option>
                            <option value="marketing">Marketing (no including the selling function)</option>
                            <option value="hr">Human Resource Management</option>
                            <option value="anf">Accounting and Finance</option>
                        </select>
                    </div>
                    <div>
                        <p>Enter Company/Client Name : </p>
                        <input type="text" name="companyName">
                    </div>
                    <br>
                    <div>
                        <button type="submit" name="enterButton" class="btn btn-primary btn-learn" onclick="NewProject()">
                            Add
                        </button>
                    </div>
                </form>
			</center>
		</div>

		<!--Main Frame-->
		<!--<div id="mainWindow">
			<iframe src="menu.html" frameborder="0" allowfullscreen
	      style="position:absolute;left:0;width:100%;height:100%;"></iframe>
		</div>-->


	</body>


</html>
