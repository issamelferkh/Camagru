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
    // if (isset($_GET['user_id']))
    // {
        $query = 'SELECT * FROM `post` WHERE `user_id`="'.$_GET['user_id'].'"';
        $query = $db->prepare($query);
        $query->execute();
        $count = $query->rowCount();
        $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
        if ($count) {
            echo " <img class='pure-img-responsive' src='".$la_case[0]['imgURL']."'> ";
        } else {
            // header("location:montage.php");
        }
    // }
?>
                <form class="pure-form" action="post_delete_script.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $la_case[0]['id']; ?>">
                    <button type="submit" class="pure-button">Delete</button>
                </form>
            </div><br><br><br>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include '../include/footer_user.php'; ?>








