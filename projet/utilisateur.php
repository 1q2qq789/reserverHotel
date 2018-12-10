<?php 
	session_start();
	
	//echo "identifiant de la session = ".$_SESSION['nom'];									

?>

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html><head>
		<title>HOTELO</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="icon" type="image/png" title="logo" href="images/hotelo.png"/>
	</head>
	<body class="subpage">

		<!-- Header -->
			<?php
			
			include("entete.html");
			
			?>

		<!-- Menu -->
			<?php
				include("entete.html");
			?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Se connecter</h1>
						<p></p>
					</header>

					<!-- Content -->
					<?php
					include("connect.php");
					
					
					 if(isset($_POST['connexion']))
					 {
					 	$login=$_POST['login'];
					 	$password=$_POST['password'];
						
						$reponse = $bdd->query("SELECT * FROM client where login = '$login' and password='$password' ");
								
							$client_existe=0; // initiallement on suppose que le client n'existe pas
							
								while ($donnees = $reponse->fetch())
									{
										$client_existe=1;  // si le client est trouver on met le compteur a 1
										
										$id=$donnees['Num_identifiant'];
										$nom=$donnees['nom'];
										$prenom=$donnees['prenom'];
										$mail=$donnees['mail'];
						
									}
									
								if ($client_existe == 1)
								{
									session_start();
									$_SESSION['id']=$id; // pour stocker l'idée  
									$_SESSION['nom']=$nom;
									$_SESSION['prenom']=$prenom;
									$_SESSION['mail']=$mail;
									
									header('Location: chambres.php');

								}									
					 	
					
					 }
					 ?>
						
						
						

					

					<!-- Elements -->
						
						<div class="row 200%">
							
							<div class="12u">

								<!-- Buttons -->
								

								<!-- Form -->
									<h3>Form</h3>

									<form method="post" action="utilisateur.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="login" id="name" value="" placeholder="Login">
											</div></br></br></br></br>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" name="password" id="email" value="" placeholder="Password">
											</div>
											<a href="inscription.php">S'inscrire ?</a>	</br>
											
											<!-- Break -->
											
											<!-- Break -->
											
											
											
											<!-- Break -->
											
											
											
											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Connexion" name="connexion"></li>
													<li><input type="reset" value="Reset" class="alt"></li>
												</ul>
											</div>
										</div>
									</form>

									<hr>

									<form method="post" action="#">
										
									</form>

					
							</div>
						</div>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">hotelo@service.com</a></li>
						<li><span class="icon fa-map-marker"></span>Aix en provence 13100</li>
					</ul>
				</div>
				<div class="copyright">
					? Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	
<nav id="menu">
				<ul class="links">
					<li><a href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Home</a></li>
					<li><a href="generic.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Generic</a></li>
					<li><a href="elements.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Elements</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Login</a></li>
				</ul>
			<a href="#menu" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a><a href="#menu" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a><a href="#menu" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a></nav></body></html>