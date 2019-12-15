<?php  	include("../include/config.php"); ?>
<?php  	include("../include/session.php"); ?>
<?php  	include("../include/destory.php"); ?>
<?php
	$sql = "delete from `requete` where id='".$_GET['id']."'";
	$resultas=mysql_query($sql);
	header('Location:index.php');
?>				
			