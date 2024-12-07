<?php
/**
 * Full article model
 */
class FullArticleModel{
	private $id;
	private $title;
	private $images;
	private $specs;
	private $paragraphs;

	function __construct($id, $title, $images, $specs, $paragraphs){
		$this->id = $id;
		$this->title = $title;
		$this->images = $images;
		$this->specs = $specs;
		$this->paragraphs = $paragraphs;
	}

	public function getId(){
		return $this->id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getImages(){
		return $this->images;
	}

	public function getSpecs(){
		return $this->specs;
	}

	public function getParagraphs(){
		return $this->paragraphs;
	}
}
?>