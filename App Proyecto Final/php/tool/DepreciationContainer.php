<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Depreciation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

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

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!-- Window controller -->
	<script type="text/javascript" src="js/depreciationWindowController.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body onLoad="showChooseMethod()">
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.php"> Evaluation Tool</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><img src="images/logo.png" width="120" height="120"></img><br><br><li>
					<li><a href="menu.html">Home</a></li>
					<li><a href="PaybackPeriodContainer.html">Payback Period</a></li>
					<li><a href="NPVContainer.html">Net Present Value</a></li>
					<li><a href="ChecklistContainer.php">Checklist</a></li>
					<li class="colorlib-active"><a href="#">Depreciation</a></li>
					<li><a href="ProjectScreeningMatrixContainer.html">Screening Matrix</a></li>
				</ul>
			</nav>
		</aside>

		<div style="overflow: hidden;background-color:white;top:0;margin-right:25px;width: 100%;height:40px;" id="returnWindow">
	      <a id="" style="position:absolute;top:1%;"></a>

				<button type="button" id="returnButton" class="btn btn-primary btn-learn" onclick="showButtons()" style="position:absolute;left:21% ;top:0.2%;">
					Return
				</button>
	    </div>

		
		<div id="chooseMethodWindow">
			<center>				
				<div style="margin-top: 16%; margin-left: 15%;">
					<button type="button" name="straightLineButton" class="btn btn-primary btn-learn" onclick="showStraightLine()">
						Straight Line
					</button>
					
				</div>
				<div style="margin-top: 4%; margin-left: 15%;">
					<button type="button" name="macrsButton" class="btn btn-primary btn-learn" onclick="showMACRS()">
						M. A. C. R. S. 
					</button>	
				</div>
				
			</center>
		</div>


		<div id="frameWindow">

			<div class="row-full">
					<iframe src=" " class="row-full" id = "calculationFrame"></iframe>
			</div>
		</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>