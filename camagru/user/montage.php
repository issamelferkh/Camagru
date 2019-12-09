<?php if(isset($_POST)) ?>
<?php
session_start();
require_once("../config/connection.php");

// mixTwoImage -> for mix two images (pic and filter)
function mixTwoImage($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $pct, $imgURL){ 

    list($src_w, $src_h) = getimagesize($src_im);

    $dst_im = imagecreatefrompng($dst_im);
    $src_im = imagecreatefrompng($src_im);
    $cut = imagecreatetruecolor($src_w, $src_h);

    imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);
    imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);
    imagecopymerge($dst_im, $cut, $dst_x, $dst_y, 0, 0, $src_w, $src_h, $pct);
   
    header('Content-Type: image/png');
    imagepng($dst_im, $imgURL);
}

if(isset($_POST["save"])) {
    if(isset($_POST["imgB64"])) {
        list($imgTYPE, $imgB64) = explode(',', $_POST["imgB64"]);
        $imgB64 = base64_decode($imgB64);
        if ($imgB64){
            $imgName = $_SESSION['user_id']."__".date("Y_m_d_H_i_s").".png";
            $imgURL = "../assets/img/".$imgName;
            file_put_contents($imgURL, $imgB64);

            $imgSrcName = $_SESSION['user_id']."__".date("Y_m_d_H_i_s")."Src.png";
            $imgSrcURL = "../assets/img/".$imgSrcName;
            file_put_contents($imgSrcURL, $imgB64);

            $filterURL = "../assets/img/filter/".$_POST['filter'];

            mixTwoImage($imgURL, $filterURL, 0, 0, 0, 0, 100,$imgURL);

            $query = 'INSERT INTO `post` (`user_id`, `username`, `imgName`, `imgURL`,`imgTYPE`, `imgSrcNAME`, `imgSrcURL`, `filter`) 
                      VALUES (?,?,?,?,?,?,?,?)';
            $query = $db->prepare($query);
            $query->execute([$_SESSION['user_id'],$_SESSION['username'],$imgName,$imgURL,$imgTYPE,$imgSrcName,$imgSrcURL,$_POST['filter']]);

            $msg = 'Your picture is published with succeed.';
            //ft_send_email($_POST['username'], $_POST['email'], $hash); /* Error !!! */
            header("location:montage.php?msg=".$msg."");

        } else {
            echo "No image !!!";
        }
    }
} 
?>fff

<!-- header -->
<?php include '../include/header_user.php'; ?>

<!-- menu -->
<?php include '../include/menu_user.php'; ?>

<!-- start container -->
<?php include '../include/title_user.php'; ?>

        <div class="content" style="text-align: center;">
            <form action="montage.php" method="POST" enctype="multipart/form-data">

                <h2 class="content-subhead">Montage</h2><br><br><br>
                <?php if(isset($_GET['msg'])) {echo '<h3 class="content-subhead">'.$_GET['msg'].'</h3>'; } ?><br>
                <div class="montage-main"><br>
                    <!-- filters -->
                    <div class="pure-g">
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="https://10.12.100.163/camagru/camagru/assets/img/filter/1.png" alt="">
                            <br>
                            <input type="radio" value="1.png" name="filter" checked> Filter_1
                        </div>
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="https://10.12.100.163/camagru/camagru/assets/img/filter/2.png" alt="">
                            <br>
                            <input type="radio" value="2.png" name="filter" checked> Filter_2
                        </div>
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="https://10.12.100.163/camagru/camagru/assets/img/filter/3.png" alt="">
                            <br>
                            <input type="radio" value="3.png" name="filter" checked> Filter_3
                        </div>
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="https://10.12.100.163/camagru/camagru/assets/img/filter/4.png" alt="">
                            <br>
                            <input type="radio" value="4.png" name="filter" checked> Filter_4
                        </div>
                    </div><hr><br>
                    <!-- video -->
                    <div class="pure-u-1">
                        <video class="montage-video" id="video"></video><br>
                        <div class="">
							<div class="">
								<label>Red:</label>
								<input type="range" class="" id="redSlider" value="0" min="0" max="100" name="red">
							</div>
							<div class="">
								<label>Green:</label>
								<input type="range" class="" id="greenSlider" value="0" min="0" max="100" name="green">
							</div>
							<div class="">
								<label>Blue:</label>
								<input type="range" class="" id="blueSlider" value="0" min="0" max="100" name="blue">
							</div>
						</div>
                        <a type="submit" class="pure-button" id="capture">Capture</a>
                        <input name="imgB64" type="text" class="imgInputData" value=""/>
                    </div>
                    <br><br>
                    <div class="pure-u-1">
                        <canvas class="montage-video" id="canvas"></canvas><br>
                        <input name="save" type="submit" class="pure-button" value="Save"><br>
                    </div>
                </div>
                <!-- photo taken   -->
<?
    $query = 'SELECT * FROM `post` WHERE `user_id`="'.$_SESSION['user_id'].'" ORDER BY `post`.`user_id` DESC';
    $query = $db->prepare($query);
    $query->execute();
    $count = $query->rowCount();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
    if ($count) {
        $resulta1 = '<label>Voila tes photos :) </label>';
        $resulta2="";
        $i = 0;
        while ($count > 0) {
            $resulta2 = $resulta2."
                        <div class='pure-u-1-2'>
<a href='post.php?user_id=".$la_case[$i]['user_id']."'><img class='pure-img-responsive' src='".$la_case[$i]['imgURL']."'></a>
                        </div>
                        ";
            $count--;
            $i++;  
        }
    } else {
        $resulta1 = '<label>B9i ma3ndek photos a sate!!!</label>';
    }
?>
                <div class="montage-side" >
                <?php if(isset($resulta1)) { echo $resulta1; } ?>
                    <div class="pure-g">
                        <?php if(isset($resulta2)) { echo $resulta2; } ;?>
                    </div>                
                </div>                
                <div class="montage-footer"></div>
                <br><hr>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include '../include/footer_user.php'; ?>








