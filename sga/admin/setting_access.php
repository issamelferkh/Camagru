<?php
require_once("../include/connexion.php");


if(isset($_POST['ajouter'])) {

        //Récupérer les données envoyées du formulaire
        $usera=$_POST['usera'];
        $appaj=$_POST['appaj'];
        //Requête
        $result=mysql_query("select EXISTS (select * from definition where id_app=$appaj nd id_user=$usera ) as access_exists");
        $res=mysql_fetch_array($result);
        if($res['access_exists']== true){
           // echo "droit definit pour l'utilisateur ".$usera. " dans l'applcation ".$appaj;
           // header("location:index.php");

            ?>
                <script language="javascript">
                    alert("access deja definit !!" );
                    document.location.href="gestion_access.php";
                </script>
        <?php

        } else {
        $req="insert into definition values($appaj,$usera)";
        $resultas=mysql_query($req);
        header("location:index.php");
    }
 
}

if(isset($_POST['modifier'])) {
        //Récupérer les données envoyées du formulaire
        $iduser=$_POST['iduser'];
        $appm=$_POST['appm'];
        //Requête
        $req="update definition set id_app=$appm where id_user=$iduser";
        $resultas=mysql_query($req);
        header("location:gestion_access.php");

  }

else if(isset($_POST['supprimer'])) {
    
//Récupérer les données envoyées du formulaire
$id_user=$_POST['iduser'];
$id_app=$_POST['idapp'];
//Requête
$req="delete from definition where id_user=$id_user and id_app=$id_app";
$resultas=mysql_query($req);
header("location:gestion_access.php");
    }
?>





