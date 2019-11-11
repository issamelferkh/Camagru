<?php
session_start();
//Connexion à la base de données
require_once("include/connexion.php");
//Récupérer le nom du propriétaire
$cp = 0;

	if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
		if(!empty($_POST)){
			$sql = 'SELECT count(*) as C FROM utilisateur WHERE login="'.@mysql_escape_string($_POST['login']).'" AND password="'.@mysql_escape_string($_POST['password']).'"';;
			$req = @mysql_query($sql);
			while($la_case=@mysql_fetch_array($req)){
				$data = $la_case['C'];
			}
			if ($data == 1) {
				$login = $_POST['login'];
                $password= $_POST['password'];
				$r = "SELECT * FROM utilisateur WHERE login='$login' AND password='$password' ";
				$reeq = @mysql_query($r);
				echo $r;
				while($la_case=@mysql_fetch_array($reeq)){
					

					$_SESSION['id_user']=$la_case['id_user'];
					$_SESSION['login']=$la_case['login'];
					$_SESSION['password']=$la_case['password'];
					$_SESSION['nom']=$la_case['nom'];
					$_SESSION['prenom']=$la_case['prenom'];
					$_SESSION['division']=$la_case['division'];
					$_SESSION['service']=$la_case['service'];
					$_SESSION['role']=$la_case['role'];
					$cp++;
				}
			}
		}
	}
	if($cp!=0) {
				if ($_SESSION['role'] == 1){
				 header('location:admin/index.php');
				}
				else {
				 header('Location:user/index.php');
				}
				}
	else{
		header ('Location:index.php');
			} 


?>