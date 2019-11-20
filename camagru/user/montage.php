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
                <div class="pure-g">
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="../assets/img/filter01.png" alt="">
                        <form class="pure-form">
                            <button type="submit" class="pure-button">Take it</button>
                        </form>
                    </div>
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1542838686-37da4a9fd1b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>
                    <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1495366691023-cc4eadcc2d7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>                
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1504279979626-c377a6c47600?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1825&q=80" alt="">
                    </div>
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1547624643-3bf761b09502?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>
                </div>
                <div class="pure-u-1-3">
                    <video class="pure-img-responsive montage" id="video"></video>
                    <form class="pure-form">
                        <button type="submit" class="pure-button">Take it</button>
                    </form>
                    <img class="montage" src="../assets/img/1000.jpg" alt="">
                </div><br>
                <hr>  
                <div class="pure-g">
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1504884790557-80daa3a9e621?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="">
                    </div>
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1542838686-37da4a9fd1b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>
                    <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1495366691023-cc4eadcc2d7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>                
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1504279979626-c377a6c47600?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1825&q=80" alt="">
                    </div>
                    <div class="pure-u-1-6">
                        <img class="pure-img-responsive" src="https://images.unsplash.com/photo-1547624643-3bf761b09502?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1868&q=80" alt="">
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<script>
    const video = document.querySelector('#video')
    function getVideo(video) {
        navigator.mediaDevices
            .getUserMedia({
                video: true,
                audio: false
            })
            .then(stream => {
                video.srcObject = stream
                video.play()
            })
            .catch(err => console.error(`Oups !!`, err))
    }
    getVideo(video)
</script>
<?php include '../include/footer_user.php'; ?>








