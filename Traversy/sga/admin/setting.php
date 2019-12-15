<?php
require_once("../include/connexion.php");

 if(isset($_POST['ajouter'])) {
    if ($_FILES["fileToUpload"]["size"] != 0) {
$target_dir = "../app/img/";
$path=$_POST["path"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
?>
     <script language="javascript">
                    alert("error file not exist !!" );
                    document.location.href="ajout.php";
                </script>
<?php        
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    $uploadOk = 0;
    header("location:ajout.php");
}*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
?>
     <script language="javascript">
                    alert("error size !!" );
                    document.location.href="ajout.php";
                </script>
<?php
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
    ?>
     <script language="javascript">
                    alert("error format !!" );
                    document.location.href="ajout.php";
                </script>
<?php
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ?>
     <script language="javascript">
                    alert("error file not uploaded !!" );
                    document.location.href="ajout.php";
                </script>
<?php
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $nomImage = $target_dir.md5(uniqid()) .'.'. $imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $nomImage)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //Connexion à la base de données
        
        //Récupérer les données envoyées du formulaire
        $nom=$_POST['nom'];
        $logo=$nomImage;
        //Requête
        $req="insert into application (nom,logo,path) values('$nom','$logo','$path')";
        $result=mysql_query($req);
        header("location:index.php");
    } else {
       
       ?>
     <script language="javascript">
                    alert("Sorry, there was an error uploading your file.");
                    document.location.href="ajout.php";
                </script>
<?php
        //echo "Sorry, there was an error uploading your file.";
    }
  }
 }
 else ?>
      <script language="javascript">
                    alert("SVP selectionnez une image !!" );
                    document.location.href="ajout.php";
      </script>
<?php   
}

if(isset($_POST['modifier'])) {
    if ($_FILES["fileToUpload"]["size"] != 0) {
    $target_dir = "../app/img/";
    $path=$_POST["path"];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["logo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
        
        ?>
     <script language="javascript">
                    alert("error file not exist !!" );
                    document.location.href="index.php";
                </script>
<?php
       // header("location:index.php");
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    $uploadOk = 0;
    echo "2";
    //header("location:index.php");
}*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
   ?>
     <script language="javascript">
                    alert("error size !!" );
                    document.location.href="index.php";
                </script>
<?php
    //header("location:index.php");
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
    ?>
     <script language="javascript">
                    alert("error format  !!" );
                    document.location.href="index.php";
                </script>
<?php
    //header("location:index.php");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // header("location:index.php");
    ?>
     <script language="javascript">
                    alert("Sorry, your file was not uploaded" );
                    document.location.href="index.php";
                </script>
<?php
    //echo "Sorry, your file was not uploaded";
// if everything is ok, try to upload file
} else {
     $nomImage = $target_dir.md5(uniqid()) .'.'. $imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $nomImage))  {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //Connexion à la base de données
        //require_once("../include/connexion.php");
        //Récupérer les données envoyées du formulaire
        $id=$_POST['id'];
        $nom=$_POST['nom'];
        $logo=$nomImage;
        $path=$_POST['path'];
        //Requête
        $req="update application set nom='$nom',logo='$logo',path='$path' where id_app=$id";
        $result=mysql_query($req);
        header("location:index.php");
    } else {
    ?>
     <script language="javascript">
                    alert("Sorry, there was an error uploading your file." );
                    document.location.href="index.php";
                </script>
<?php
        //header("location:index.php");
        //echo "Sorry, there was an error uploading your file.";
     }
    }
   }
   else {
         $id=$_POST['id'];
        $nom=$_POST['nom'];
        $logo=$_POST['img'];
        $path=$_POST['path'];
        //Requête
        $req="update application set nom='$nom',logo='$logo',path='$path' where id=$id";
        $result=mysql_query($req);
        header("location:index.php");
    }
  }

else if(isset($_POST['supprimer'])) {
    require_once("../include/connexion.php");
//Récupérer les données envoyées du formulaire
$id=$_POST['id'];
//Requête
$req="delete from application where id_app=$id";
$result=mysql_query($req);
header("location:index.php");
    }
?>





