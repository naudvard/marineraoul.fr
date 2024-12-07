<?php
/**
 * Database connection
 */
class Database {
	private static $instance = null;

	public static function getInstance(){
		if (is_null(self::$instance)) {
			self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		}
		return self::$instance;
	}
}
?>