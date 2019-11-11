<?php
	$host="localhost";
	$db="sgadb";
	$user="root";
	$passwd="";

	$connection= @mysql_connect($host,$user,$passwd) or DIE ("pas de serveur");

	@mysql_select_db($db) or DIE ("pas de base de donnés");
@mysql_query("SET NAMES 'utf8'");
@mysql_query('SET CHARACTER SET utf8');


?>
