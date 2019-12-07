<?php
session_start();
require_once("config/connection.php");


if(isset($_POST["signin"])) {
    if(empty($_POST["username"]) || empty($_POST["password"])) {
        $message = '<label>All fields are required.</label>';
    }
    else {        
        $query = 'SELECT * FROM user WHERE username="'.$_POST['username'].'" AND password="'.hash('whirlpool', $_POST['password']).'"';
        $query = $db->prepare($query);
        $query->execute();
        $count = $query->rowCount();
        $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
        if ($count > 0) {
            if ($la_case[0]['active'] == 1) {
                $_SESSION['user_id']=$la_case[0]['user_id'];
                $_SESSION['username']=$la_case[0]['username'];
                $_SESSION['fname']=$la_case[0]['fname'];
                $_SESSION['lname']=$la_case[0]['lname'];
                $_SESSION['email']=$la_case[0]['email'];
                header("location:user/index.php");
            } else {
                $message = '<label>Your account is not activated yet!</label>';
            }
            
        } else {
            $message = '<label>Incorrect Username or Password.</label>';
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
            <?php //echo "-->".$la_case[0]['active']; ?>
            <?php //print_r ($la_case); ?>


            <?php if(isset($_GET['msg'])) {echo '<h3 class="content-subhead">'.$_GET['msg'].'</h3>'; } ?><br>
            <div class="pure-u-1-4">
                <form class="pure-form" method="post" action="signin.php">
                    <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars(trim($_POST['username'])); ?>"    placeholder="Username" class="pure-input-rounded" required>
                    <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlspecialchars(trim($_POST['password'])); ?>"    placeholder="Password" class="pure-input-rounded" required>
                    <?php if(isset($message)) {echo '<label class="text-danger">'.$message.'</label>'; } ?><br>
                    <button type="submit" name="signin" class="pure-button">Sign In</button>
                </form>
            </div><br><br><br>
            <?php include 'include/slide.php'; ?>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include 'include/footer.php'; ?>








