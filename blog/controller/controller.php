<?php
require_once('model/model.php');

function listPosts(){
    $posts = getPosts();
    require_once('view/frontend/listPostsView.php');
}

function post(){
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require_once('postView.php');
}

function addComment($postId, $author, $comment){
    $affectedLines = postComment($postId, $author, $comment);
    if ($affectedLines === false) {
        die("Impossible d\'ajouter le commentaire !");
    }
    else {
        header("Location: index.php?action=post&id=" . $postId);
    }
}
?>