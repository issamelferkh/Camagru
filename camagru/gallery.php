<?php
require_once("config/connection.php");
?>

<!-- header -->
<?php include 'include/header.php'; ?>

<!-- menu -->
<?php include 'include/menu.php'; ?>

<!-- start container -->
<?php include 'include/title.php'; ?>

<?
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

    $query = "SELECT * FROM `post` ORDER BY `post`.`created_at` DESC LIMIT $page,5";
    $query = $db->prepare($query);
    $query->execute();
    $count = $query->rowCount();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
    if ($count) {
        $resulta1 = $resulta1.'Voila tes photos :)';
        $resulta2="";
        $i = 0;
        while ($count > 0) {
            $resulta2 = $resulta2."

                        <div class='pure-u-1'>
                        By <B>".$la_case[$i]['username']."</B>, at <B>".$la_case[$i]['created_at']."</B><br>
                            <img class='pure-img-responsive galerie-post' src='assets/".$la_case[$i]['imgURL']."'>
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
<?php include 'include/footer.php'; ?>