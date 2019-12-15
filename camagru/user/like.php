<?php
session_start();
require_once("../config/connection.php");

if(empty($_GET["post_id"]) || empty($_GET["user_id"]) || empty($_GET["liked"])) {
    header("location:gallery.php");
}
else {
    if ($_GET["liked"] == "8513C69D070A008DF008AEF8624ED24AFC81B170D242FAF5FAFE853D4FE9BF8AA7BADFB0FD045D7B350B19FBF8EF6B2A51F17A07A1F6819ABC9BA5CE43324244") {
        $like = 1;
    }        
    $query = 'INSERT INTO `like_table` (`post_id`, `user_id`, `liked`) VALUES (?,?,?)';
    $query = $db->prepare($query);
    $query->execute([$_GET['post_id'],$_GET['user_id'],$like]);
    header("location:gallery.php");
}

?>