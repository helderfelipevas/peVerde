
<?php 
session_start();
$codigo_planta = $_GET['cdPlanta'];
$_SESSION['cd_planta'] = $codigo_planta;
include_once '../controller/plantaController.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$descricao['nm_planta']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
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

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php"><img src="images/logo_pe.png" width="130px" height="140px" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="index.php">Inicio</a></li>
					<li><a href="plantas.php">Plantas</a></li>
					<li><a href="sobre.php">Sobre o Site</a></li>		
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2016 pÉ Verde em Casa, Todos os Direitos Reservados.</span> <span>Designed by Helder Felipe & Flavia Silva </span> </small></p>
				<ul>
                                    <li><a href="https://br.linkedin.com/in/helderfelipevas"><i class="icon-linkedin"></i></a>Helder Felipe</li>&nbsp;&nbsp;
					<li><a href="https://br.linkedin.com/in/flaviaass65"><i class="icon-linkedin"></i></a>Flavia Silva</li>
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content animate-box fh5co-border-bottom" data-animate-effect="fadeInLeft">
				<h2 class="fh5co-heading" ><?= $descricao["nm_planta"]; ?></span></h2>
                                <p><p><?= $descricao["ds_planta"]; ?></p></p>

				<div class="row">
					<div class="col-md-6">
						<figure><img src="images/plantas/<?= $descricao['im_planta'] ?>" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive"></figure>
					</div>

					<div class="col-md-6">
                                            <div class="col-lg-6">
                                                <b>Quant. Luz:</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <i><?= $descricao['ds_luz']; ?></i>
                                            </div>
                                            <div class="col-lg-6">
                                               <b>Época p/ plantar:</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <i><?= $descricao['ds_epoca']; ?></i>
                                            </div>
                                            <div class="col-lg-6">
                                                <b>Quant. água:</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <i><?= $descricao['ds_agua']; ?></i>
                                            </div>
                                            <div class="col-lg-6">
                                                <b>Época p/ colher:</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <i><?= $descricao['ds_colheita']; ?></i>
                                            </div>
                                            <div class="col-lg-6">
                                                <b>Temperatura:</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <i><?= $descricao['ds_temperatura']; ?></i>
                                            </div>
                                            <div class="col-lg-6">
                                                <b>Tamanho do Vazo:</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <i><?= $descricao['ds_tamanho_vazo']; ?></i>
                                            </div>
                                            <div class="col-lg-6">
                                                <b>Região:</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <i><?= $descricao['ds_regiao']; ?></i>
                                            </div>   
					</div>	
				</div>
                        <div class="row">
					<div class="col-md-12">
                                            <b>Como Plantar:</b>
                                        </div>
                                        <div class="col-md-12">
                                            <i><?= $descricao['ds_como_plantar']; ?></i>
                                        </div>
			</div>
                        <div class="row">
					<div class="col-md-12">
                                            &nbsp;
                                        </div>
                        </div>
                        <div class="row">
					<div class="col-md-12">
                                            <b>Cuidados com a planta:</b>
                                        </div>
                                        <div class="col-md-12">
                                            <i><?= $descricao['ds_cuidados']; ?></i>
                                        </div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

