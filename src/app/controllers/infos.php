<?php 
class InfosController {
	function __construct(){
		require_once "../app/repositories/infos_repository.php";
	}

	function showAll() {
		$infos = InfosRepository::getInfos();
		require_once('../app/views/infos.php');
	}
}
?>