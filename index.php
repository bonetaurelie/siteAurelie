<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<?php
	include ('header.php');
	?>
</head>

	<body itemscope itemtype="http://schema.org/WebPage">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
				<nav id="nav">
					<a href="aProposDeMoi.php" class="icon fa-home active"></a>
					<a href="cv.php" class="icon fa-file-o"></a>
					<a href="portfolio.php" class="icon fa-folder"></a>
					<a href="contact.php" class="icon fa-envelope"></a>
				</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
						<article id="me" class="panel">
							<header>
								<h1 itemprop="name">Aurélie Bonet</h1>
								<p itemprop="description">Développeuse - Chef de projet multimedia</p>
							</header>
							<a itemprop="url" href="cv.php" class="jumplink pic">
								<span class="arrow icon fa-chevron-right"><span>Voir mon CV</span></span>
								<img itemprop="image" src="images/photoidentiteaureliebonet.jpg" alt="Aurélie Bonet" />
							</a>
						</article>
					</div>


			<!-- footer -->
				<?php
				include ('footer.php');
				?>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>