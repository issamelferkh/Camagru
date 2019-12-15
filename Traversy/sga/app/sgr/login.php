<?php
	include("include/config.php");
	$cp = 0;
	if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
		if(!empty($_POST)){
			$sql = 'SELECT count(*) as C FROM user WHERE login="'.@mysql_escape_string($_POST['login']).'" AND password="'.@mysql_escape_string($_POST['password']).'"';
			$req = @mysql_query($sql);
			while($la_case=@mysql_fetch_array($req)){
				$data = $la_case['C'];
			}
			if ($data == 1) {
				$login=$_POST['login'];
				$password=$_POST['password'];
				$r = "SELECT * FROM `user` WHERE `login`='$login' AND `password`='$password'";
				$reeq = @mysql_query($r);
				echo $r;
				while($la_case=@mysql_fetch_array($reeq)){
					session_start();

					$_SESSION['id']=$la_case['id'];
					$_SESSION['login']=$la_case['login'];
					$_SESSION['password']=$la_case['password'];
					$_SESSION['type']=$la_case['type'];
					$_SESSION['nom']=$la_case['nom'];
					$_SESSION['prenom']=$la_case['prenom'];
					$_SESSION['division']=$la_case['division'];
					$_SESSION['service']=$la_case['service'];

					$cp++;
				}
			}
		}
	}
	if($cp!=0) {
		if ($_SESSION['type']=="division") header('Location:division');
		elseif($_SESSION['type']=="admin") header('Location:admin');
		//elseif ($_SESSION['type']=="saisie") header('Location:saisie/home.php');
	}
	else{
		header ('Location:index.php');
			} 
?>
