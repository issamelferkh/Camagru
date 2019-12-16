<?php
session_start();
require_once("config/connection.php");


if(empty($_GET['email']) || empty($_GET['hash'])) {
    $message = '<label>All fields are required.</label>';
}
else{        
    $query = 'SELECT * FROM user WHERE email="'.$_GET['email'].'" AND hash="'.$_GET['hash'].'"';
    // $query = 'SELECT * FROM user WHERE username="'.$_POST['username'].'" AND password="'.hash('whirlpool', $_POST['password']).'"';
    $query = $db->prepare($query);
    $query->execute();
    $count = $query->rowCount();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
    if($count > 0) {
        if($la_case[0]['active'] == 0) {
            $active = 1;
            $sql = "UPDATE user SET active=?";
            $db->prepare($sql)->execute([$active]);

            $message = '<label>Your account is active now.</label>';
            header("location:signin.php?msg=".$message."");
        } else if($la_case[0]['active'] == 1) {
            $message = '<label>Your account is already activated !!!</label>';
            header("location:signin.php?msg=".$message."");
        }
        
    } else{
        $message = '<label>You don\'t have an account yet in Camagru!!!</label>';
        header("location:signin.php?msg=".$message."");
    }
}

?>