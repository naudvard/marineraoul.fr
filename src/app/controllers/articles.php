<?php 
class ArticlesController {
	function __construct(){
		require_once "../app/repositories/article_repository.php";
	}

	function showAll() {
		$articles = ArticleRepository::getArticles();
		require_once('../app/views/index.php');
	}

	function show($id) {
		if(!filter_var($id, FILTER_VALIDATE_INT)) {
			echo "400 - Bad Request.";
			return;
		}
		
		$full_article = ArticleRepository::getFullArticle($id);
		require_once('../app/views/article.php');
	}
}
?>