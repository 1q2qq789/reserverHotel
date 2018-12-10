<?php 
	session_start();
	
	//echo "identifiant de la session = ".$_SESSION['nom'];									

?>

<!DOCTYPE HTML>
<?php
header("Content-Type: text/html;charset=ISO-8859-1");
print "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
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
		include("entete.html");
		include("connect.php");	
			
		?>	
		
		 

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>NOS ACTUALITE</h1>
						<p></p>
					</header>
					
					
					<?php
				
						$dbb=new PDO('mysql:host=localhost;dbname=hotelo','root','');
						$reponse = $dbb->query('SELECT * FROM actualite');
						$cmp=0;
						while ($donne=$reponse->fetch())
							{
								$titre=$donne['titre'];	
								$texte=$donne['texte'];	
								$image=$donne['image'];	
					?>
						<div class="chambre" onclick="window.location='afficher_actualite.php?id=<?php echo $donne['id']; ?>'">
						<div class="figChambre">
						<figure >
							<img src="<?php echo "admin/pages/".$image;?>"/>
						</figure>
						</div>
						<div class="detailChambre">
							<div class="chambreDetail">
							<h2><?php echo $titre; ?></h2>
							<p style="text-align:justify;"><?php for ($i=0; 250>$i; $i++) echo $texte[$i]; ?> ...</p>
							
						
						
							<p></p>
							<p></p>
						</div>
							<hr>
							
						</div>
						
					</div>
					
						<hr color="black">

					<?php
							}
						$reponse->closeCursor();
				
				
				
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