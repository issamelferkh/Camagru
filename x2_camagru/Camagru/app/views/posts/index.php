<?php require APPROOT .'/views/inc/header.php';?>
<main role="main">

<div class="jumbotron">
<h1 class="dis[play-3"><?php echo $data['title']; ?></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <?php if(isset($_SESSION['username'])): ?>
      <a class="btn btn-primary btn-lg" href="<?php echo URLROOT;?>/posts/Image" role="button">Add Post</a>
      <?php else : ?>
      <a class="btn btn-primary btn-lg" href="<?php echo URLROOT;?>/users/register" role="button">Register Now</a>
    <? endif;?>
</div>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
     <?php foreach($data['posts'] as $post)   : ?>
      <div class="col-md-4">    
        <div class="card mb-4 box-shadow">
        <?php echo '<img class="card-img-top" src="'.$post->imgurl.'" alt="Card image cap">'; ?>
          <div class="card-body">
            <p class="card-text"><?php echo $post->likes; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="row">
                <?php   
                    $liked = false;
                  foreach($data['likes'] as $like){
                        if($like->userid == $_SESSION['id'] && $like->imgid == $post->imgid){
                            $liked = true;
                        ?>
                <div class="col-md-4">
                    <i class="fa fa-heart"  data-imgid="<?php echo $post->imgid; ?>" data-userid="<?php echo $_SESSION['id'];?>" name="unliket"></i>
                </div>
                <?php }
                  }
                  if ($liked === false){ ?>
                  <div class="col-md-4">
                    <i class="fa fa-heart-o" id="like" data-imgid="<?php echo $post->imgid; ?>" data-userid="<?php echo $_SESSION['id'];?>" name="liket"></i>
                    </div>
                  <?php }

                  ?>
                  <div class="col-md-4"> <i class="fa fa-comment-o" id="commentbtn" name="commentbtn"></i></div>
                </div>
                <div class="comment" id="comment">
                <div class="commentBox" hidden>
                
                 <form class="form-inline" role="form">
                     <div class="form-group">
                        <input class="form-control" type="text" placeholder="Your comments" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default">Add</button>
                    </div>
                </form>
                    </div></div>
              <p class="card-text"><?php echo $post->imgedate; ?></p>
            </div>
          </div>
        </div>
    </div>
    <?php endforeach; ?>
    </div>
  </div>
  </div>

</main>
<?php require APPROOT . '/views/inc/footer.php';?>
