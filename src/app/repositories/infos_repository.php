<?php
/**
 * Infos repository
 */
class InfosRepository{
	public static function getInfos(){
		$db = Database::getInstance();

		$stmt = $db->prepare("SELECT infos_paragraph FROM infos ORDER BY infos_order");
		$stmt->execute();
		$infos = $stmt->fetchAll(PDO::FETCH_COLUMN); // infos

		return $infos;
	}
}
?>