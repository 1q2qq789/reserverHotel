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
		<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="chambres.php">Chambres</a></li>
					<li><a href="actualite.php">Actualités</a></li>
					<li><a href="utilisateur.php">Utilisateur</a></li>
					
					
				</ul>
				<ul class="actions vertical">
					<li><a href="utilisateur.php" class="button fit">Login</a></li>
				</ul>
			</nav>
			<?php
				
				include("connect.php");
					
					
						$erreurname=""; 
						$erreuremail=""; 
						$erreurdatearrivee=""; 
						$erreurdatesortie=""; 
						$erreurmassage=""; 

						$name=""; 
						$email=""; 
						$datearrivee=""; 
						$datesortie=""; 
						$message=""; 					
						
						
					 if(isset($_POST['reservation']))
					 {
						 
							$name=$_POST['name'];
							$email=$_POST['email'];
							$datearrivee=$_POST['datearrivee'];
							$datesortie=$_POST['datesortie'];
							$amessage=$_POST['message'];
							
						if (empty($_POST['name']))
						 { $erreurname="<span style='color:red;font-size:1em;text-align:right;'>Name obligatoire !!</span>"; }
						if (empty($_POST['email'])) 
							{ $erreuremail="<span style='color:red;font-size:1em;text-align:right;'>Email obligatoire !!</span>"; }
						if (empty($_POST['datearrivee']))
						 { $erreurdatearrivee="<span style='color:red;font-size:1em;text-align:right;'>Date arrivee obligatoire !!</span>"; }
						if (empty($_POST['datesortie'])) 
							{ $erreurdatesortie="<span style='color:red;font-size:1em;text-align:right;'>Date sortie obligatoire !!</span>"; }
						if (empty($_POST['message']))
						 { $erreurmassage="<span style='color:red;font-size:1em;text-align:right;'>Message obligatoire !!</span>"; }
						}
									

					if ( (!empty($_POST['name'])) and (!empty($_POST['email'])) and (!empty($_POST['datearrivee'])) and
						(!empty($_POST['datesortie'])) and (!empty($_POST['message'])))
						{
								
							//avant d'inserer il faut s'assurer que le client n'existe pas dans la BD
							
							$reponse = $bdd->query("SELECT * FROM client where mail = '$email'");
								
							$client_existe=0; // initiallement on suppose que le client n'existe pas
								while ($donnees = $reponse->fetch())
									{
										$client_existe=1;  // si le client est trouvé on met le compteur à 1
										
									}
								$message=$_POST['message'];
								
								$req = $bdd->query("INSERT INTO `commande`(`message`, `Num_identifiant`,datearrivee, datesortie, Num_chambre) 
								VALUES ('".$message."',".$_SESSION['id'].",'".$_POST['datearrivee']."','".$_POST['datesortie']."',".$_POST['idchambre'].")");
								
								echo "<span style='color:green;font-size:1.2em;text-align:center;'>Commande Envoyée Avec succ&eacute;</span>";
								
								
								$requete1="INSERT INTO `commande`(`message`, `Num_identifiant`,datearrivee, datesortie, Num_chambre) 
								VALUES ('".$message."',".$_SESSION['id'].",'".$_POST['datearrivee']."','".$_POST['datesortie']."',".$_POST['idchambre'].")";
								//echo $requete1;
						}
					 ?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>RESERVATION</h1>
						<p></p>
					</header>

					<!-- Content -->
					

					<!-- Elements -->
						
						<div class="row 200%">
							
							<div class="12u">

								<!-- Buttons -->

								<!-- Form -->
								<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
											<link rel="stylesheet" href="/resources/demos/style.css">
											<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
											<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
									<h3>Form</h3>
									<script>
									$( function() {
									$("#datepicker").datepicker();});
									</script>
									
<?php if (!isset($_SESSION['id'])) {  echo "Vous devez vous connectez pour faire une reservation"; } else { ?>
				
									<form method="post" action="reservation.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="name" id="name" placeholder="Nom" value=""> <?php   echo $erreurname;?>
											</div></br></br></br></br>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="email" id="email" placeholder="Mail" value=""> <?php   echo $erreuremail;?>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="datearrivee" id="datepicker" placeholder="Date d'arrivée" value=""> <?php echo $erreurdatearrivee;?>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="datesortie" id="datepicker" placeholder="Date de départ" value=""> <?php   echo $erreurdatesortie;?>
											</div>
											<div class="12u$">
												<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea><?php   echo $erreurmassage;?>
											</div>
											
											<input type="hidden" name="idchambre" value="<?php echo $_GET['idchambre']; ?>" />
											
											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="reservation" name="reservation" ></li>
													<li><input type="reset" value="reset" class="alt"></li>
												</ul>
											</div>
										</div>
									</form>
<?php } ?>

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