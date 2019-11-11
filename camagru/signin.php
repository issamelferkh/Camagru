<?php
session_start();
require_once("config/setup.php");


if(isset($_POST["signin"])) {
    if(empty($_POST["username"]) || empty($_POST["password"])) {
        $message = '<label>All fields are required</label>';
    }
    else {
        $query = 'SELECT * FROM user WHERE username="'.$_POST['username'].'" AND password="'.$_POST['password'].'"';
        $query = $db->prepare($query);
        $query->execute();
        $count = $query->rowCount();
        if ($count > 0) {
            $_SESSION['id_user']=$la_case['id'];
            $_SESSION['username']=$la_case['username'];
            $_SESSION['password']=$la_case['password'];
            $_SESSION['f_name']=$la_case['f_name'];
            $_SESSION['l_name']=$la_case['l_name'];
            $_SESSION['email']=$la_case['email'];
            header("location:user/index.php");
        } else {
            $message = '<label>Wrong Data</label>';
        }
    }
} 
?>

<!-- header -->
<?php include 'include/header.php'; ?>

<!-- menu -->
<?php include 'include/menu.php'; ?>

<!-- start container -->
<?php include 'include/title.php'; ?>
<br><br><br>
        <div class="content" style="text-align: center;">
            <h2 class="content-subhead">Sign In</h2>
            <div class="pure-u-1-4">
                <form class="pure-form" method="post" action="signin.php">
                    <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars(trim($_POST['username'])); ?>"    placeholder="Username" class="pure-input-rounded">
                    <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlspecialchars(trim($_POST['password'])); ?>"    placeholder="Password" class="pure-input-rounded">
                    <?php if(isset($message)) {echo '<label class="text-danger">'.$message.'</label>'; } ?><br>
                    <button type="submit" name="signin" class="pure-button">Sign In</button>
                </form>
            </div><br><br><br>

            <div class="pure-g">
                <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://via.placeholder.com/1000x1000.jpg" alt="">
                </div>
                <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://via.placeholder.com/1000x1000.jpg" alt="">
                </div>
                <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://via.placeholder.com/1000x1000.jpg" alt="">
                </div>
                <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://via.placeholder.com/1000x1000.jpg" alt="">
                </div>                
                <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://via.placeholder.com/1000x1000.jpg" alt="">
                </div>
                <div class="pure-u-1-6">
                    <img class="pure-img-responsive" src="https://via.placeholder.com/1000x1000.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include 'include/footer.php'; ?>








