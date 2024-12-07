<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Marine Raoul - <?= $full_article->getTitle(); ?></title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	<meta name="viewport" content="width=580" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Articles">
	<link rel="icon" href="/public/img/icon.png">
</head>
<body>
	<header>
		<nav>
			<a href="/">Marine Raoul</a>
			<a href="/infos">Infos</a>
		</nav>
	</header>
	<section class="container mreverse lreverse">
		<article class="w100 mw50 lw50">
			<div class="article-text sm-25 m-30" id="scroll-text">
				<h1><?= $full_article->getTitle(); ?></h1>
				<ul>
					<?php
					foreach ($full_article->getSpecs() as $spec) {
						echo "<li><span class='article-cat'>" . $spec["specs_title"] . ":</span> ". $spec["specs_content"] ."</li>";
					}
					?>
				</ul>
				<br>
				<content>
					<?php 
					foreach ($full_article->getParagraphs() as $paragraph) {
						echo "<p>" . $paragraph . "</p><br>";
					}
					?>
				</content>
			</div>
		</article>
		<aside class="w100 mw50 lw50">
			<?php
			foreach ($full_article->getImages() as $image) {
				echo "<img class='w100' src='/" . $image . "'>";
			}
			?>
		</aside>
	</section>
	<script type="text/javascript">
		if(window.innerWidth > 600){
			var element = document.getElementById("scroll-text");
			let toScroll = element.scrollHeight + element.offsetTop;
			if(toScroll > window.innerHeight){
				toScroll += 60;
				window.addEventListener("scroll", (e) => {
					let windowScroll = window.scrollY + window.innerHeight;
					if(windowScroll > toScroll){
						if(!element.classList.contains("fixed")){
							element.classList.toggle("fixed");
						}
					}else{
						if(element.classList.contains("fixed")){
							element.classList.toggle("fixed");
						}
					}
				});
			}else{
				element.classList.toggle("fixedtop");
			}
		}
	</script>
</body>
</html>