<?php
require_once('model.php');

function listPosts(){
    $posts = getPosts();
    require_once('listPostsView.php');
}

function post(){
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require_once('postView.php');
}
?>