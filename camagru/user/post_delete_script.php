<?php
require_once("../config/connection.php");

include '../include/session.php'; 

    if (isset($_POST))
    {
        $query = 'DELETE FROM `post` WHERE `id` = :id';
        $query = $db->prepare($query);
        $query->bindParam(':id', $_POST['id'], PDO::PARAM_INT); 
        $query->execute();
        $msg = 'The picture '.$_POST['id'].' is deleted with succeed.';
        header("location:montage.php?msg=".$msg."");

    }
?>









