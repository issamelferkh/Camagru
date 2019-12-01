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
    $query = 'SELECT * FROM `post` ORDER BY `post`.`created_at` DESC';
    $query = $db->prepare($query);
    $query->execute();
    $count = $query->rowCount();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
    if ($count) {
        $resulta1 = 'Voila tes photos :)';
        $resulta2="";
        $i = 0;
        while ($count > 0) {
            $resulta2 = $resulta2."

                        <div class='pure-u-1'>
                        <img class='pure-img-responsive galerie-post' src='assets/".$la_case[$i]['imgURL']."'>
                            <form class='pure-form galerie-form'>
                                <input type='text' placeholder='Username' class='pure-input-rounded'>
                                <button type='submit' class='pure-button'>Sign In</button>
                                <button type='submit' class='pure-button'>Sign In</button>
                            </form>
                        </div><br><br><br>
                        ";
            $count--;
            $i++;  
        }
    } else {
        $resulta1 = 'B9i ma3ndek tsawer!!!';
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
            </div>
        </div>
    </div>
</div>
<!-- end container -->


<!-- footer -->
<?php include 'include/footer.php'; ?>