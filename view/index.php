
<?php 
include_once '../controller/planta.php'; 
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>pÉ Verder em Casa</title>

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
			<div class="fh5co-gallery">
                            <?php foreach ($plantas as $planta){ ?>
                            
                                <?php                           
                                $_SESSION["acao"] = "buscar";
                                ?>
                            <a class="gallery-item" href="descricao.php?cdPlanta=<?= $planta['cd_planta']; ?>">
                                <img src="images/plantas/<?= $planta['im_planta'] ?>">
					<span class="overlay">
						<h2><?=$planta['nm_planta'] ?></h2>
					</span>
                            </a>
                            <?php } ?>                 
			</div>
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Dicas</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-viadeo"></i>
							</div>
							<div class="fh5co-text">
								<h3>Natureza</h3>
								<p>Utilize sempre que possivel a própria natureza para tratar de seu cultivo, a natureza é de grande ajuda.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-envira"></i>
							</div>
							<div class="fh5co-text">
								<h3>Plantas</h3>
								<p>Cada planta tem sua necessidade, e é necessário cuidar dela para que ela continue sempre viva e forte. </p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-bug"></i>
							</div>
							<div class="fh5co-text">
								<h3>Insetos</h3>
								<p>Estão sempre a espreita independente se você mora no campo ou na cidade. Utilize insenticidas naturais para afasta-los. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-cutlery"></i>
							</div>
							<div class="fh5co-text">
								<h3>Temperos</h3>
								<p>Diversos temperos são facilmente plantados em casa, e não ocupam muito espaço. </p>
							</div>
						</div>
					</div>

				</div>
			</div>


			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="item">
		            	<figure>
                                    <img src="images/pensadores/Mahatma_Gandhi.jpg">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Cada dia a natureza produz o suficiente para nossa carência. Se cada um tomasse o que lhe fosse necessário, não havia pobreza no mundo e ninguém morreria de fome. &rdquo; <cite class="author">&mdash; Mahatma Gandhi</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
                                    <img src="images/pensadores/Johann_Goethe.jpg">
		            	</figure>
		              	<p class="text-center quote">&ldquo;A natureza é o único livro que oferece um conteúdo valioso em todas as suas folhas. &rdquo;<cite class="author">&mdash; Johann Goethe</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
                                    <img src="images/pensadores/antoine_lavoisier.jpg">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Na natureza nada se cria, nada se perde, tudo se transforma. &rdquo;<cite class="author">&mdash; Antoine Lavoisier</cite></p>
		            </div>
		          </div>
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

