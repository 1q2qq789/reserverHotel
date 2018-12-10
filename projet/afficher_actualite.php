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
			<section id="main" class="wrapper" >
				<div class="inner">
					
					
					
					<?php
				
						$dbb=new PDO('mysql:host=localhost;dbname=hotelo','root','');
						$reponse = $dbb->query("SELECT * FROM actualite where id =". $_GET['id']);
						$cmp=0;
						while ($donne=$reponse->fetch())
							{
								$titre=$donne['titre'];	
								$texte=$donne['texte'];	
								$image=$donne['image'];	
					?>
					<center>
					<header class="align-center">
						<h1><?php echo $titre; ?></h1>
					</header>
						<div class="chambre" >
							<img width="800" height="400" src="<?php echo "admin/pages/".$image;?>"/>
						<div class="detailChambre" style="width:1000px;">
						<br>
							<p style="font-size:20px;"><?php echo $texte; ?></p>
						
							</center>
							
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