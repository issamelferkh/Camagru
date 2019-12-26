<?php include 'include/header.php'; ?>

<?php include 'include/menu.php'; ?>

<!-- start container -->
<?php include 'include/title.php'; ?>
<br><br><br>
        <div class="content">
            <h2 class="content-subhead">About Us</h2>
            <?php if(isset($_GET['msg'])) {echo '<h3 class="content-subhead">'.htmlspecialchars($_GET['msg']).'</h3>'; } ?><br>
            <p>
                We are the first to provide IT training in Morocco, completely free of charge, 
                open and accessible to anyone between the ages of 18 and 30. No need for an IT degree, 
                or of having undergone extensive IT training. 
                The only criteria for admission CREATIVITY, we are <a href="https://1337.ma/en/">Thirteen Thirty Seven</a>.
            </p>

            <h2 class="content-subhead">What is Camagru</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <!-- Slide -->
            <?php include 'include/slide.php'; ?>

            <h2 class="content-subhead">How to use Camagru</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include 'include/footer.php'; ?>







