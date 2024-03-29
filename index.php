<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Porfolio Bernard</title>
	<meta name="keywords" content="">
	<meta name="description" content="portfolio">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div id="fullpage">
		<div id="home" class="section">
			<div class="container">
				<div class="col-md-2"></div>
				<div class="col-md-8 wow fadeIn" data-wow-delay="0.9s">
					<h1>Bernard</h1>
					<h2 class="rotate">Dev junior, html, Css, Javascript, Php, Figma, Github</h2>
					<p>Mes compétences à votre service</p>
					<a href="#about" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="1s">Visiter</a>
				</div>
			</div>
		</div>

		<div id="about" class="section">
			<div class="container">
				<div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
					<h2>A propos de moi</h2><br>
					<h4>Développeur Web et Web mobile</h4>
					<p>J’ai une formation initiale de menuisier (BEP) et d’agenceur (BT). Passionné d’informatique depuis l'adolescence, j'ai
						programmé quelques années en autodidacte. J'ai aussi des notions de dépannage informatique
						hardware et software. J'ai décidé de me reconvertir.</p>
					<p>J’ai choisi de devenir développeur web.</p>
				</div>
				<div class="col-md-6 col-xs-11 wow fadeInRight" data-wow-delay="0.9s">
					<span class="text-top">HTML5 </span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
							aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
					<span>CSS3 </span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
							aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
					</div>
					<span>JS </span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
							aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
					</div>
					<span>PHP </span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
							aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
					</div>

					<span>FIGMA </span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
							aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
				</div>

				<!-- modal -->
				<a href="#OpenModal" class="btn btn-default">Voir mon cv</a>

				<div id="OpenModal" class="StyleModal">
					<div class="modal_content">
						<a href="#about" class="ModalClose">X</a>
					</div>
				</div>

			</div>
		</div>

		<div id="portfolio" class="section">
			<div class="container">
				<div class="col-md-12">
					<h2 class="wow bounce">PORTFOLIO</h2>
				</div>
				<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img">
						<div class="portfolio-overlay">
							<h3>Capgemen</h3>
							<p>Intégrer à partir d'une maquette.</p>
							<p>Utilisation de bootstrap.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img">
						<div class="portfolio-overlay">
							<h3>Pure haircut</h3>
							<p>A partir d'une maquette figma,</p>
							<p>intégrer un site</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img">
						<div class="portfolio-overlay">
							<h3>Créative</h3>
							<p>Travail à réaliser par groupe de 2.</p>
							<p>Intégrer le site sans Bootstrap</p>
							<p>Projet livré sur Github en 5jours</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img">
						<div class="portfolio-overlay">
							<h3>Allojv</h3>
							<p>Réaliser une maquette avec figma.</p>
							<p>Générer l’interface en JavaScript.</p>
							<p>Créer un carrousel et une modale</p>

						</div>
					</div>
				</div>

				<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img5.jpg" class="img-responsive" alt="portfolio img">
						<div class="portfolio-overlay">
							<h3>PopCode</h3>
							<p>Intégrer une interface HTML/CSS</p>
							<p>Animations et interactions en JS</p>
							<p>Optimiser le site internet</p>
						</div>
					</div>
				</div>
			</div>

			<a href="https://github.com/Bernard39600" target="_blank" class="btn btn-default smoothScroll wow fadeInUp"
				data-wow-delay="1s">Github</a>

		</div>

		<div id="contact" class="section">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
					<address>
						<h2 class="wow bounce">Contactez moi</h2>
						<br>
						<p><i class="fa fa-phone"></i> 06 84 05 96 67</p>
						<p><i class="fa fa-envelope"></i> b.brocard@codeur.online</p>
						<p><i class="fa fa-map-marker"></i> 39600 Arbois</p>
					</address>
				</div>

				<div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
					<form role="form" method="post" action="">
						<input type="text" name="nom" class="form-control" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br />
						<input type="email" name="mail" class="form-control" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br />
						<textarea name="message" rows="7" class="form-control" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br />

						<!-- <a href="#contact" class="btn btn-default smoothScroll wow f -->
						<input class="btn btn-default smoothScroll wow fadeInUp" type="submit" value="Envoyer !" name="mailform"/>

					</form>

					<?php if(isset($msg)) {
					   echo $msg;
					}
					?>
				</div>
			</div>
		</div>

		<footer>
			<div class=" wow fadeIn" data-wow-delay="0.9s">
				<h3>Copyleft &copy; Brocard 2022</h3>
				<br>
				<!-- <ul class="social-icon">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
				</ul> -->
			</div>
		</footer>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/jquery.fullPage.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.simple-text-rotator.js"></script>
	<script src="js/custom.js"></script>
</body>

<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <br />
               '.nl2br($_POST['message']).'         
            </div>
         </body>
      </html>
      ';
      mail("b.brocard@codeur.online", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?>

</html>