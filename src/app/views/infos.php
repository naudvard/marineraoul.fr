<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Marine Raoul - Infos</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	<meta name="viewport" content="width=580" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Diplômée du LAAB à Rennes en 2021, je suis installée depuis 2023 dans le Bas-Rhin en Alsace.">
	<link rel="icon" href="public/img/icon.png">
</head>
<body>
	<header>
		<nav>
			<a href="/">Marine Raoul</a>
			<a href="/infos">Infos</a>
		</nav>
	</header>
	<section class="infos">
		<article class="m-50 sm-25">
			<?php
			foreach ($infos as $info) {
				echo "<p>".$info."</p><br>";
			}
			?>
		</article>
		<aside class="contacts m-50 sm-25">
			<div>
				<p><a href="mailto:bonjour@marineraoul.fr">bonjour@marineraoul.fr</a></p>
				<p>+33 (0)7 83 97 66 58</p>
			</div>
			<div class="text-right">
				<p><a href="https://www.instagram.com/marinerao/?hl=fr">Instagram</a></p>
				<p><a href="https://www.linkedin.com/in/marine-raoul/?originalSubdomain=fr">LinkedIn</a></p>
			</div>
		</aside>
	</section>
</body>