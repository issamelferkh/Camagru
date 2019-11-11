<?php
include_once 'database.php';
try {
	$db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	$sql = "DROP DATABASE IF EXISTS `camagru`;"; 
	$db->exec($sql);

	$sql = "CREATE DATABASE IF NOT EXISTS `camagru`;"; 
	$db->exec($sql);

	$db->exec('use camagru');		
	$sql = file_get_contents('camagru.sql');
	$db->exec($sql);
	
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}

