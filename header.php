<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CV Alexandre Batista</title>

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- slider -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	
	<!-- fancybox -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

	<!-- script -->
	

	<!-- css -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<!--GA-->

<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-XXXXXXXX-X', 'auto');
	ga('send', 'pageview');
</script>



<body>
	<header>
		<nav class="navbar navbar-expand-md">
			<div class="container">

				<a class="navbar-brand" href="index.php">CV<b>.</b></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<?php 
							$pagina=str_replace(".php","", basename($_SERVER['SCRIPT_NAME']));
						?>
						<li class="nav-item">
							<a class="nav-link <?=($pagina=="index") ? "active" : "" ?>" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=($pagina=="about") ? "active" : "" ?>" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=($pagina=="skills") ? "active" : "" ?>" href="skills.php">Skills</a>
						</li>

						<li class="nav-item">
							<a class="nav-link <?=($pagina=="hobbies") ? "active" : "" ?>" href="hobbies.php">Hobbies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=($pagina=="blog") ? "active" : "" ?>" href="blog.php">Blog</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    </header>  