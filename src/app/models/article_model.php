<?php 
/**
 * Article model
 */
class ArticleModel{
	private $id;
	private $cover;
	private $coverbis;
	private $title;

	function __construct($id, $cover, $coverbis, $title){
		$this->id = $id;
		$this->cover = $cover;
		$this->coverbis = $coverbis;
		$this->title = $title;
	}

	public function getId(){
		return $this->id;
	}

	public function getCover(){
		return $this->cover;
	}

	public function getCoverbis(){
		return $this->coverbis;
	}

	public function getTitle() {
		return $this->title;
	}
}
?>