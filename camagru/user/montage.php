<!-- Session -->
<?php include '../include/session.php'; ?>

<!-- header -->
<?php include '../include/header_user.php'; ?>

<!-- menu -->
<?php include '../include/menu_user.php'; ?>

<!-- start container -->
<?php include '../include/title_user.php'; ?>

        <div class="content" style="text-align: center;">
            <h2 class="content-subhead">Montage</h2>
            <!-- filters            -->
            <div class="pure-g">
                <div class="pure-u-1-4">
                    <img id="design" style="width: 100px; height: 100px;" src="../assets/img/x1.png" alt="">
                    <br>
                    <input type="radio" value="design" name="stickers" checked> Happy
                </div>
                <div class="pure-u-1-4">
                    <img id="design" style="width: 100px; height: 100px;" src="../assets/img/x1.png" alt="">
                    <br>
                    <input type="radio" value="design" name="stickers" checked> Happy
                </div>
                <div class="pure-u-1-4">
                    <img id="design" style="width: 100px; height: 100px;" src="../assets/img/x1.png" alt="">
                    <br>
                    <input type="radio" value="design" name="stickers" checked> Happy
                </div>
                <div class="pure-u-1-4">
                    <input type="button" id="noSticker" onclick="no_Sticker();"  class="btn btn-primary" style="margin-top:15%;" value="noSticker" >
                </div>
            </div><hr><br>
            <!-- video -->
            <div class="montage-main">
                <div class="pure-u-1">
                    <video class="montage-video" id="video"></video><br>
                    <a type="submit" class="pure-button" id="capture">Capture</a>
                </div>
                <br><br>
                <div class="pure-u-1">
                    <!-- <img class="montage" src="../assets/img/1000.jpg" alt=""> -->
                    <canvas class="montage-video" id="canvas"></canvas>
                </div>
            </div>
            <!-- photo taken   -->
            <div class="montage-side">
                <div class="pure-g">
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
                    <div class="pure-u-1-2">
                        <img class="pure-img-responsive" src="../assets/img/1000.jpg" alt="">
                    </div>
                </div>                
            </div>                
            <div class="montage-footer"></div>
            <br><hr>
            </div>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include '../include/footer_user.php'; ?>








