<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Marine Raoul - Designer graphique</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	<meta name="description" content="Diplômée du LAAB à Rennes en 2021, je suis installée depuis 2023 dans le Bas-Rhin en Alsace." />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="Xd2zkLxbU2ibz0It_c6Ct-w6BRg7ZhCYzwnvUIrS2aU" />
	<meta charset="UTF-8">
	<meta http-equiv="content-language" content="fr">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="/public/img/icon.png">
</head>
<body>
	<header>
		<nav>
			<a href="/">Marine Raoul</a>
			<a href="/infos">Infos</a>
		</nav>
	</header>
	<section class="container">
		<?php
		foreach ($articles as $value) {
			echo "<a class='w100 mw50 lw50' href='/articles/".$value->getId()."'><img class='w100' id='".$value->getId()."' alt='".$value->getTitle()."' aria-label='open' src='/".$value->getCover()."' onmouseover='this.src=\"/".$value->getCoverbis()."\"' onmouseout='this.src=\"/".$value->getCover()."\"'></a>";
		}
		?>
	</section>
</body>
</html>