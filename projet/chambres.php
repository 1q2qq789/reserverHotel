<?php 
	session_start();
	
	//echo "identifiant de la session = ".$_SESSION['nom'];									

?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>HOTELO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="icon" type="image/png" title="logo" href="images/hotelo.png"/>
	</head>
	<body class="subpage">

		<!-- Header -->
			<?php
		include("entete.html");
		
			
		?>	

		<!-- Menu -->
		<?php
		$dbb=new PDO('mysql:host=localhost;dbname=hotelo','root','');	
			
		?>	
		
		 

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>NOS CHAMBRES</h1>
						<p></p>
					</header>
					
					
					<?php
				
						$dbb=new PDO('mysql:host=localhost;dbname=hotelo','root','');
						$reponse = $dbb->query('SELECT * FROM chambre');
						$cmp=0;
						while ($donne=$reponse->fetch())
							{
								$Num_chambre=$donne['Num_chambre'];
								$prix=$donne['prix'];	
								$Description=$donne['Description'];	
								$Surface=$donne['Surface'];	
								$Lit=$donne['Lit'];	
								$image=$donne['image'];	
								$type=$donne['type'];
						
						
					?>
						<div class="chambre">
						<div class="figChambre">
						<figure >
							<img src="<?php echo "admin/pages/".$image;?>"/>
						</figure>
						</div>
						<div class="detailChambre">
							<div class="chambreDetail">
							<h2><?php echo $type; ?></h2>
							<p><?php echo $Description; ?></p>
							<ul>
								<li>Taille : <?php echo $Surface; ?> ft2</li>
								<li>Lits : <?php echo $Lit; ?></li>
							</ul>
							</div>
							<hr>
							<div class="detailPic">
								<img src="images/wifi.png" class="picDetail"/>
								<img src="images/tel.png" class="picDetail"/>
								<img src="images/boisson.png" class="picDetail"/>
								<img src="images/rest.png" class="picDetail"/>
								<img src="images/ventilation.png" class="picDetail"/>
								<img src="images/towel.png" class="picDetail"/>
							</div>
						</div>
						<div class="priceChambre">
							<p class="detailPrice">A partir de <div class="price"> <?php echo $prix; ?></div></p>
							<div><button class="buttonPrice" Onclick="window.location='reservation.php?idchambre=<?php echo $Num_chambre; ?>'">Reserver</button></div>
						</div>
					</div>
					
						<hr>

					<?php
							}
						$reponse->closeCursor();//关闭游标，使语句能再次被执行。
				?>
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
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>