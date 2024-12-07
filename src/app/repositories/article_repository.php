<?php 
require_once "../app/models/article_model.php";
require_once "../app/models/full_article_model.php";

/**
 * Article repostiory
 */
class ArticleRepository {
	public static function getArticles(){
		$db = Database::getInstance();
		$stmt = $db->query("SELECT article_id, article_cover, article_coverbis, article_title FROM articles ORDER BY article_order");
		$res = $stmt->fetchAll();
		$articles = [];
		foreach ($res as $value) {
			array_push($articles, new ArticleModel($value["article_id"], $value["article_cover"], $value["article_coverbis"], $value["article_title"]));
		}
		return $articles;
	}

	public static function getFullArticle($id){
		$db = Database::getInstance();

		$stmt = $db->prepare("SELECT article_title FROM articles WHERE article_id=?");
		$stmt->execute([$id]);
		$article = $stmt->fetch(PDO::FETCH_COLUMN); // title

		$stmt = $db->prepare("SELECT images_path FROM images WHERE articles_article_id=? ORDER BY images_order");
		$stmt->execute([$id]);
		$images = $stmt->fetchAll(PDO::FETCH_COLUMN); // array of paths

		$stmt = $db->prepare("SELECT specs_title, specs_content FROM specs WHERE articles_article_id=? ORDER BY specs_order");
		$stmt->execute([$id]);
		$specs = $stmt->fetchAll(); // array of array of specs_title and specs_content ?

		$stmt = $db->prepare("SELECT paragraph_content FROM paragraph WHERE articles_article_id=? ORDER BY paragraph_order");
		$stmt->execute([$id]);
		$paragraphs = $stmt->fetchAll(PDO::FETCH_COLUMN); // array of paragraphs

		return new FullArticleModel($id, $article, $images, $specs, $paragraphs);
	}
}
?>