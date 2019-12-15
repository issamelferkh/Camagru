<?php
require_once("../include/connexion.php");


if(isset($_POST['ajouter'])) {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $division=$_POST['division'];
        $service=$_POST['service'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $role=$_POST['lst'];

        $req="insert into utilisateur (nom,prenom,division,service,login,password,role) values('$nom','$prenom','$division','$service','$login','$password','$role')";
        $result=mysql_query($req);
        header("location:index.php");
 }
 if(isset($_POST['modifier'])) {
        //Récupérer les données envoyées du formulaire
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $division=$_POST['division'];
        $service=$_POST['service'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        $id_user=$_POST['id_user'];
        //Requête
        $req="UPDATE `utilisateur` SET `nom`='$nom',`prenom`='$prenom',`division`='$division',`service`='$service',`login`='login',`password`='$password',`role`=$role WHERE `id_user`=$id_user ";
        $resultas=mysql_query($req);
        header("location:gestion_user.php");

  }

else if(isset($_POST['supprimer'])) {
    
//Récupérer les données envoyées du formulaire
$id_user=$_POST['id_user'];
//Requête
$req="delete from utilisateur where id_user=$id_user";
$resultas=mysql_query($req);
header("location:gestion_user.php");
    }

?>