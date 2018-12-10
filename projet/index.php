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
		<link rel="icon" type="image/png" title="logo" href="images/hotelo.png"/>
	</head>
	<body>
<?php
header("Content-Type: text/html;charset=ISO-8859-1");
print "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>	
	<?php
	include ("connect.php");
	?>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">HOTELO</a>
				<nav class="right">
					<a href="#" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<?php
			include("entete.html");
			?>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>WELCOME TO HOTELO</h1>
					<p></p>
					<ul class="actions">
						<li><a href="chambres.php" class="button scrolly">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Confirmation instantanée</h3>
							<p>En une seule clique</p>
						</div>
						<div>
							<h3>Résérvation sécurisé</h3>
							<p>Tarifs exceptionnels</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic23.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Service client 24h/24</h3>
							<p>100% Satisfait</p>
						</div>
						<div>
							<h3>Annulation gratuite</h3>
							<p>Bonnes affaires</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>HOTELO</h2>
					<figure>
					    <blockquote><!--加一组标签，往右缩排一单位-->
					        "Le meilleur site d'hotel qui vous aide à trouver vos chambres préférés"
					    </blockquote>
					    <footer>
					        <cite class="author">YASSINE, ENZE, JUNYAN</cite>
					        <cite class="company">CEO, Founder</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
				
				<?php
				
				$dbb=new PDO('mysql:host=localhost;dbname=hotelo','root','');
				$reponse = $dbb->query('SELECT * FROM actualite  order by id desc LIMIT 0,3');
				$cmp=0;
				while ($donne=$reponse->fetch())
					{
					  	$id=$donne['id'];
						$titre=$donne['titre'];	
						$texte=$donne['texte'];							
						$image=$donne['image'];	
						
						
						?>
						
						<div class="flex-item box" style="margin-right:20px;">
						<div class="image fit">
							<a href="" ><img src="<?php echo "admin/pages/".$image;?>" alt="" height="200" /></a>
						</div>
						<div class="content">
							<h3><?php echo $titre; ?></h3>
							<p><?php for ($i=0; 250>$i; $i++) echo $texte[$i]; ?> </p>
						</div>
					</div>
					
					<?php
						$cmp++;
						if ($cmp == 3) { echo "</div><div class='inner flex flex-3'>"; }
					}
				$reponse->closeCursor();
				
				
				
				?>
					
				

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