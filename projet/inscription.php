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
			<script>
		function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Adresse Email non Valide');
            return false;
        }

        return true;

}

		</script>
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
						<h1>S'inscrire</h1>
						<p></p>
					</header>

					
					
					<!-- Content -->
					<?php
					include("connect.php");
						$erreurlogin=""; 
						$erreurpassword=""; 
						$erreurnom=""; 
						$erreurprenom=""; 
						$erreuradresse=""; 
						$erreuremail=""; 
						$erreurtelephone="";

						$login=""; 
						$password=""; 
						$nom=""; 
						$prenom=""; 
						$adresse=""; 
						$email=""; 
						$telephone="";						
						
						
					 if(isset($_POST['inscription']))
					 {
						 
							$login=$_POST['login'];
							$password=$_POST['password'];
							$nom=$_POST['nom'];
							$prenom=$_POST['prenom'];
							$adresse=$_POST['adresse'];
							$email=$_POST['email'];
							$telephone=$_POST['telephone'];
							
							
						if (empty($_POST['login'])) { $erreurlogin="<span style='color:red;font-size:1em;text-align:right;'>Login Obligatoire !!</span>"; }
						if (empty($_POST['password'])) { $erreurpassword="<span style='color:red;font-size:1em;text-align:right;'>Password Obligatoire !!</span>"; }
						if (empty($_POST['nom'])) { $erreurnom="<span style='color:red;font-size:1em;text-align:right;'>Nom Obligatoire !!</span>"; }
						if (empty($_POST['prenom'])) { $erreurprenom="<span style='color:red;font-size:1em;text-align:right;'>Prenom Obligatoire !!</span>"; }
						if (empty($_POST['adresse'])) { $erreuradresse="<span style='color:red;font-size:1em;text-align:right;'>Adresse Obligatoire !!</span>"; }
						if (empty($_POST['email'])) { $erreuremail="<span style='color:red;font-size:1.2em;text-align:right;'>Email Obligatoire !!</span>"; }
						if (empty($_POST['telephone'])) { $erreurtelephone="<span style='color:red;font-size:1em;text-align:right;'>Telephone Obligatoire !!</span>"; }
									
						
					if ( (!empty($_POST['login'])) and (!empty($_POST['password'])) and (!empty($_POST['nom'])) and
						(!empty($_POST['prenom'])) and (!empty($_POST['adresse'])) and (!empty($_POST['email'])) and (!empty($_POST['telephone'])) )
						{
								
								
						 
							

								
							//avant d'inserer il faut s'assurer que le client n'existe pas dans la BD
							
							$reponse = $bdd->query("SELECT * FROM client where mail = '$email'  ");
								
							$client_existe=0; // initiallement on suppose que le client n'existe pas
							
								while ($donnees = $reponse->fetch())
									{
										$client_existe=1;  // si le client est trouver on met le compteur a 1
										
									}
									
								
									
							if ($client_existe == 0)
							{								
								$req = $bdd->query("INSERT INTO `client`(`nom`, `mail`, `prenom`, `adresse`, `telephone`, `login`, `password`) 
								VALUES ('".$nom."','".$email."','".$prenom."','".$adresse."','".$telephone."','".$login."','".$password."')");
								
								echo "<span style='color:green;font-size:1.2em;text-align:center;'>Inscription Effectuée Avec succ&eacute;</span>";								
																
							}
							else
							{
								
								echo "<span style='color:red;font-size:1.2em;text-align:center;'>Client Existant</span>";
								
							}
								
							
						}
						
					 }
					 
					
					 ?>
						
						
						

					

					<!-- Elements -->
						
						<div class="row 200%">
							
							<div class="12u">

								<!-- Buttons -->
								

								<!-- Form -->
									<h3>Form</h3>

									<form method="post" action="inscription.php">
										<div class="row uniform">
										
											<div class="6u 12u$(xsmall)">
											
												<input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" placeholder="nom"> <?php   echo $erreurnom; ?>
											</div><br><br><br><br>
											
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>" placeholder="prenom"> <?php   echo $erreurprenom;?>
											</div>
											
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="adresse" id="adresse" value="<?php echo $adresse; ?>" placeholder="adresse"> <?php   echo $erreuradresse;?>
											</div>
											
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="telephone" id="telephone" value="<?php echo $telephone; ?>" placeholder="telephone"> <?php   echo $erreurtelephone;?>
											</div>
											
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="email" id="email" onblur="validateEmail(this);" value="<?php echo $email; ?>" placeholder="email"> <?php   echo $erreuremail;?>
											</div>
											
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="login" id="login" value="<?php echo $login; ?>" placeholder="login"> <?php   echo $erreurlogin;?>
											</div>
											
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="password" id="password" value="" placeholder="password"> <?php   echo $erreurpassword;?>
											</div>

											
											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Inscription" name="inscription" ></li>
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