<?php require APPROOT .'/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>/pages/index" class="btn btn-light"><i class="fa fa-backward"></i> Back</a><br>
    <br>
    <!---->
    <div class="jumbotron jumbotron-fuld text-center">
    <h2>Add Post</h2>
    
         <div id="imagefilter" >
            <video id="video" width="400" height="300" class="img-fluid"></video>
            <img src="" id="img_filter" >
         </div>
        <div class="flex-md-equal w-100 my-md-3 pl-md-3"> 
            <a class="btn btn-primary btn-lg" href="#" id="capture" role="button">Take Photo</a>
            <input type="file" name="upFile" id="upFile" accept=".png,.gif,.jpg,.jpeg">
            <div class="flex-md-equal w-100 m-3 py-md-3">
            <div class="container" data-spy="scroll"  style="overflow-x: auto; border:1px groove black; width: 200px; height: 300px; float: left; display: flex;">
            <div class="col">
                <?php $d = '../public/imgs/PNGS/';
                    foreach(glob($d."*") as $file) : ?>    
                    <?php echo '<img class="card-img-top" src="'.$file.'" alt="Card image cap" id="'.$file.'" style="width: 100px; height: 100px;" >'; ?>
                    <input type="radio" value="<?php echo $file; ?>" name="stickers"> stickers
                <?php endforeach; ?>
              </div>
              </div>
         <div class="container">
         <canvas id="canvas" width="400" height="300" class="img-fluid">
         </canvas> </div><br>
         <form action="<?php echo URLROOT;?>/posts/image" method="POST">
          <a class="btn btn-primary btn-lg" href="#" id="up" role="button">Add Pic</a>
         <a class="btn btn-primary btn-lg" href="#" id="clear" role="button">Clear</a>
        </form>
      </div>
     </div>
     <div>
<?php require APPROOT .'/views/inc/footer.php'; ?>