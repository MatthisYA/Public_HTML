<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">
	
	<!-- Page Title -->
	<title>ACF2L - Aéroclub de Frotey Les Lures</title>
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Font Awesome icon css-->
	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="css/flaticon.css" rel="stylesheet" media="screen">
	<!-- Swiper's CSS -->
	<link rel="stylesheet" href="css/swiper.min.css">
	<!-- Animated css -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- Magnific Popup CSS -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Slick nav css -->
	<link rel="stylesheet" href="css/slicknav.css">
	<!-- Main custom css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="css/monstyle.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#main-navbar" data-offset="71">
	<!-- Tob Bar Section Start -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="header-social-link">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				
				<div class="col-md-8 text-right">
					<div class="school-info">
						<ul>
							<li><a href="#"><i class="fa fa-envelope"></i> Email : acf2l@gmail.com</a></li>
							<li><a href="#"><i class="fa fa-phone"></i> Tel : +33 01 60 56 60 60</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Tob Bar Section End -->
	
	<!-- Header Section Start -->
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light" id="main-navbar">
			<div class="container">
				<!-- Navbar Brand start -->
				<a class="navbar-brand" href="#"><img src="images/logo.png" alt="" /></a>
				<!-- Navbar Brand end -->
				
				<ul class="navbar-nav ml-auto" id="main-menu">
					<li class="nav-item"><a class="nav-link active" href="#home">Accueil</a></li>
					<li class="nav-item"><a class="nav-link" href="#activities">Nos activites</a></li>
					<li class="nav-item"><a class="nav-link" href="#courses">Categories d'ULM</a></li>
					<li class="nav-item"><a class="nav-link" href="#about-us">les moyens pedagogiques</a></li>
					<li class="nav-item"><a class="nav-link" href="#teachers">l'equipe</a></li>
					<li class="nav-item"><a class="nav-link" href="#events">Evenements</a></li>
					<li class="nav-item"><a class="nav-link" href="#review">Review</a></li>
					<li class="nav-item"><a class="nav-link" href="#gallery">Galerie</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				</ul>
					
				<div class="navbar-toggle"></div>
				<div id="responsive-menu"></div>
			</div>
		</nav>	
	
	</div>
	<!-- Banner Slider Section ends -->
	
	<div class="container">
		<br>
		<hr>
		<?php
			$server = "localhost"; 
			$user = "admin";
			$password = "sio";
			$dbname = "acf2l";
// Create connection
			$conn = new mysqli($server, $user, $password, $dbname);
// Check connection
			if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
			$nom = $_GET['nom']; 
			$email = $_GET['email'];
			$date = $_GET['dateNaissance'];
			$demande = $_GET['demande'];
			$requete = "INSERT INTO message(nomPersonne,melPersonne,dateNaissance,objet)
		VALUES ('$nom','$email','$date','$demande');"; 
			if ( !( $result = mysqli_query( $conn,$requete )))
				die( "Erreur de la requete :". $conn -> error );

			mysqli_close($conn); 
			echo"<h2>Merci, Mr, Mme $nom pour votre prise de contact, nous vous repondrons prochainement </h2>"; 
		?>
		 <hr>
	</div>
	</footer>
	<!-- Footer Section Ends -->
	
	<!-- Jquery Library File -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Wow js file -->
	<script src="js/wow.js"></script>
	<!-- Swiper Carousel js file -->
	<script src="js/swiper.min.js"></script>
	<script src="js/SwiperAnimation.min.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Slick Nav js file -->
	<script src="js/jquery.slicknav.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
    <!-- Main Custom js file -->
	<script src="js/function.js"></script>
</body>
</html>