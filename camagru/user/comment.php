<?php
session_start();
require_once("../config/connection.php");


if(isset($_POST["OK"])) {
    if(empty($_POST["comment"]) || empty($_POST["post_id"]) || empty($_POST["username"])) {
        // $message = '<label>Write a comment please</label>';
        header("location:gallery.php");
    }
    else {        
        $query = 'INSERT INTO `comment` (`comment`, `post_id`, `username`,`user_id`) VALUES (?,?,?,?)';
        $query = $db->prepare($query);
        $query->execute([$_POST['comment'],$_POST['post_id'],$_POST['username'],$_POST['user_id']]);
        // $message = ' ';
        header("location:gallery.php");
    }
} 
?>