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

<br><br><br>
        <div class="content" style="text-align: center;">
            <h2 class="content-subhead">Gallery</h2>
            <div class="pure-u-1">
<?
    if (isset($_GET['user_id']) && isset($_GET['post_id']) && isset($_GET['user_id2']) && isset($_GET['post_id2']))
    {
        $user_id = hash('whirlpool', $_GET['user_id']+195);
        $post_id = hash('whirlpool', $_GET['post_id']+917)
        
        $user_id2 = $_GET['user_id2'];
        $post_id2 = $_GET['post_id2'];


        if (($user_id === $user_id2) && ($post_id === $post_id2)) {
            $query = 'SELECT * FROM `post` WHERE `user_id`="'.$_GET['user_id'].'" AND `post_id`="'.$_GET['post_id'].'"';
            $query = $db->prepare($query);
            $query->execute();
            $count = $query->rowCount();
            $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
            if ($count) {
                echo " <img class='pure-img-responsive' src='".$la_case[0]['imgURL']."'> ";
            } else {
                header("location:montage.php");
            }
        }
    }
?>
                <form class="pure-form" action="post_delete_script.php" method="POST">
                    <input type="hidden" name="post_id" value="<?php echo $la_case[0]['post_id']; ?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    <button type="submit" class="pure-button">Delete</button>
                </form>
            </div><br><br><br>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include '../include/footer_user.php'; ?>
