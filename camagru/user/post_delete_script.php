<?php
require_once("../config/connection.php");

include '../include/session.php'; 

    if (isset($_POST))
    {
        $query = 'DELETE FROM `post` WHERE `user_id` = :user_id';
        $query = $db->prepare($query);
        $query->bindParam(':user_id', $_POST['user_id'], PDO::PARAM_INT); 
        $query->execute();
        $msg = 'The picture '.$_POST['user_id'].' is deleted with succeed.';
        header("location:montage.php?msg=".$msg."");

    }
?>









