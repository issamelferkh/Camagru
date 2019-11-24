<?php if(isset($_POST)) ?>
<?php
session_start();
require_once("../config/connection.php");


if(isset($_POST["save"])) {
    if(isset($_POST["imgB64"])) {
        list($type, $data) = explode(',', $_POST["imgB64"]);
        $data = base64_decode($data);
        if ($data){
            $imgURL = "../assets/img/";
            $imgName = date("Y_m_d_H_i_s");
            $imgName = $_SESSION['id_user']."__".$imgName.".png";
            $imgURL = $imgURL.$imgName;
            echo $imgURL;
            file_put_contents($imgURL, $data);
        } else {
            echo "No image !!!";
        }
    }
} 
?>

<!-- header -->
<?php //include '../include/header_user.php'; ?>

<!-- menu -->
<?php include '../include/menu_user.php'; ?>

<!-- start container -->
<?php include '../include/title_user.php'; ?>

        <div class="content" style="text-align: center;">
            <form action="montage.php" method="POST" enctype="multipart/form-data">

                <h2 class="content-subhead">Montage</h2><br><br><br>
                <div class="montage-main"><br>
                    <!-- filters -->
                    <div class="pure-g">
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="../assets/img/1000.jpg" alt="">
                            <br>
                            <input type="radio" value="design" name="stickers" checked> Filter_1
                        </div>
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="../assets/img/1000.jpg" alt="">
                            <br>
                            <input type="radio" value="design" name="stickers" checked> Filter_2
                        </div>
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="../assets/img/1000.jpg" alt="">
                            <br>
                            <input type="radio" value="design" name="stickers" checked> Filter_3
                        </div>
                        <div class="pure-u-1-4">
                            <img id="design" style="width: 100px; height: 100px;" src="../assets/img/1000.jpg" alt="">
                            <br>
                            <input type="radio" value="design" name="stickers" checked> Filter_4
                        </div>
                    </div><hr><br>
                    <!-- video -->
                    <div class="pure-u-1">
                        <video class="montage-video" id="video"></video><br>
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
                <div class="montage-side" >
                    <div class="pure-g">
                    <div class="pure-u-1-2">
                            <?php 
                                if(isset($imgB64)) { 
                                    echo $img; 
                                } 
                            ?>
                            <img class="pure-img-responsive" src="../assets/img/aaa.png" alt="">
                        </div>
                        <div class="pure-u-1-2">
                            <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                        </div>
                        <div class="pure-u-1-2">
                            <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                        </div>
                        <div class="pure-u-1-2">
                            <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                        </div>
                        <div class="pure-u-1-2">
                            <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                        </div>
                        <div class="pure-u-1-2">
                            <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                        </div>
                        <div class="pure-u-1-2">
                            <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                        </div>
                        <div class="pure-u-1-2">
                            <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                        </div>
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








