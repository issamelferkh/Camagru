<?php
session_start();
require_once("config/connection.php");


if(empty($_GET['email']) || empty($_GET['hash'])) {
    $message = '<label>All fields are required.</label>';
}
else{        
    $query = 'SELECT * FROM user WHERE email="'.$_GET['email'].'" AND hash="'.$_GET['hash'].'"';
    $query = $db->prepare($query);
    $query->execute();
    $count = $query->rowCount();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
    if($count > 0) {
        $token = md5(rand(0,1000));
        header("location:forget_pwd_reset.php?msg=".$token."");        
    } else{
        $message = '<label>You don\'t have an account yet in Camagru!!!</label>';
        header("location:signin.php?msg=".$message."");
    }
}
// if($la_case[0]['active'] == 0) {
//     $active = 1;
//     $sql = "UPDATE user SET active=?";
//     $db->prepare($sql)->execute([$active]);
?>