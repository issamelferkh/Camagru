<?php
require_once("../config/connection.php");
?>
<!-- Session -->
<?php include '../include/session.php'; ?>

<!-- header -->
<?php include '../include/header_user.php'; ?>

<!-- menu -->
<?php include '../include/menu_user.php'; ?>

<!-- start container -->
<?php include '../include/title_user.php'; ?>

<?
/* page nbr */
$resulta1 = "";
if (isset($_GET['page']) && isset($_GET['oldpage'])) {
    if ($_GET['oldpage'] == hash('whirlpool', $_GET['page']+17)) {
        $page = $_GET['page'];
        if ($page == "" || $page == "1") {
            $page = 0;
        } else {
            $page = ($page*5)-5;
        }
    } else {
        $resulta1 = 'Sorry page not found !!!<br>';
        $_GET['page'] = 0;
        $page = 0;
    }
} else {
    $_GET['page'] = 0;
    $page = 0;
}

/* view comments of each post */
$query = "SELECT * FROM `comment`";
$query = $db->prepare($query);
$query->execute();
$count = $query->rowCount();
$la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
if ($count) {
    $i=0;
    while ($i < $count) {
        $post_id = $la_case[$i]['post_id'];
        $msg[$post_id] = "";
        $j=0;
        while ($j < $count) {
            if ($la_case[$i]['post_id'] == $la_case[$j]['post_id']) {
                $msg[$post_id] = $msg[$post_id]."
                                <form class='pure-form galerie-form'>
                                    Comment by <B>".$la_case[$j]['username']."</B> at <B>".$la_case[$j]['created_at']."</B><br>
                                    <textarea class='pure-input-1' readonly>".$la_case[$j]['comment']."</textarea>
                                </form><br>
                            ";
            }
            $j++;
        }
        $i++;  
    }
}

/* view post */
    $query = "SELECT * FROM `post` ORDER BY `post`.`created_at` DESC LIMIT $page,5";
    $query = $db->prepare($query);
    $query->execute();
    $count = $query->rowCount();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
    $like = "8513C69D070A008DF008AEF8624ED24AFC81B170D242FAF5FAFE853D4FE9BF8AA7BADFB0FD045D7B350B19FBF8EF6B2A51F17A07A1F6819ABC9BA5CE43324244";
    if ($count) {
        $resulta1 = $resulta1.'Voila tes photos :)';
        $resulta2="";
        $i = 0;
        while ($count > 0) {
            /* likes of each post */
            $query_like = 'SELECT * FROM `like_table` WHERE `user_id`="'.$_SESSION['user_id'].'" AND `post_id`="'.$la_case[$i]['post_id'].'"';
            $query_like = $db->prepare($query_like);
            $query_like->execute();
            $count_like = $query_like->rowCount();
            $la_case_like = $query_like->fetchAll(\PDO::FETCH_ASSOC);
            if (($count_like) && ($la_case_like[0]['liked'] == 1)) {
                $isLiked = true;
            } else {
                $isLiked = false;
            }
            // verif if there is a comments for this post
            $post_id = $la_case[$i]['post_id'];
            if (empty($msg[$post_id])) {
                $comment = "";
            } else {
                $comment = $msg[$post_id];
            }
            $resulta2 = $resulta2."
                        <div class='pure-u-1'>
                        Post by <B>".$la_case[$i]['username']."</B>, at <B>".$la_case[$i]['created_at']."</B><br>
                        <img class='pure-img-responsive galerie-post' src='".$la_case[$i]['imgURL']."'>
                            ".$comment."
                            <form class='pure-form galerie-form' action='comment.php' method='post'>
                                <input type='text' name='comment' placeholder='Write a comment...' class='pure-input-1'>
                                <input type='hidden' name='post_id' value='".$la_case[$i]['post_id']."'>
                                <input type='hidden' name='auteur_id' value='".$la_case[$i]['user_id']."'>
                                <input type='hidden' name='username' value='".$_SESSION['username']."'>
                                <input type='hidden' name='user_id' value='".$_SESSION['user_id']."'>"; 
if($isLiked) {
    $resulta2 = $resulta2."<a href='#' class='pure-button'>Likeeeeed</a>";
} else {
    $resulta2 = $resulta2."<a href='like.php?post_id=".$la_case[$i]['post_id']."&user_id=".$_SESSION['user_id']."&liked=".$like."' class='pure-button'>Like</a>";
}

            $resulta2 = $resulta2."<button type='submit' name='OK' class='pure-button'>Comment</button>
                            </form>
                            
                        </div><br><br><br>
                        ";
            $count--;
            $i++;  
        }
    } else {
        $resulta1 = $resulta1.'B9i ma3ndek tsawer!!!';
    }
?>

<br><br><br>
        <div class="content" style="text-align: center;">
            <h2 class="content-subhead">Gallery</h2>
            <?php if(isset($resulta1)) {echo '<h3 class="content-subhead">'.$resulta1.'</h3>'; } ?><br>
            <div class="ca_gallery">
                <div class="galerie-main">
                    <br>
                    <?php if(isset($resulta2)) { echo $resulta2; } ;?>
                </div>

<?php 
/* page nbr*/
    $query = 'SELECT COUNT(*) FROM `post`';
    $query = $db->prepare($query);
    $query->execute();
    $nbr_page = $query->fetchColumn();
    $i = ceil($nbr_page/5);
    for ($j=1;$j<=$i;$j++) {
        $k = hash('whirlpool', $j+17);
        ?><a href="gallery.php?page=<?php echo $j; ?>&oldpage=<?php echo $k; ?>" style="text-decoration:none"><?php echo $j." ";?></a><?php
    }

?>
            </div>
        </div>
    </div>
</div>
<!-- end container -->


<!-- footer -->
<?php include '../include/footer_user.php'; ?>