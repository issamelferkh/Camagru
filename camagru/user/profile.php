<!-- Session -->
<?php include '../include/session.php'; ?>

<?php

if(isset($_POST["signup"])) {
    // if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])) {
    //     $message = '<label>All fields are required.</label>';
    // }

    $pwdlen = strlen($_POST['password']);
    $uppercase = preg_match('@[A-Z]@', $_POST['password']);
    $lowercase = preg_match('@[a-z]@', $_POST['password']);
    $number    = preg_match('@[0-9]@', $_POST['password']);
    $specialChars = preg_match('@[^\w]@', $_POST['password']);
    $hash = md5(rand(0,1000));

    if($pwdlen < 8) {
        $message = '<label>Invalid password. Password must be at least 8 characters.</label>';
    } else if(!$uppercase || !$lowercase || !$number || !$specialChars) {
        $message = 'Password should be include at least one upper case letter, one number, and one special character.';
    } else {
        $query = 'INSERT INTO `user` (`username`, `email`, `password`, `hash`) VALUES (?,?,?,?)';
        $query = $db->prepare($query);
        $query->execute([$_POST['username'],$_POST['email'],$_POST['password'],$hash]);
        $msg = 'Please active your account by clicking the activation link that has been send to your email.';
        //ft_send_email($_POST['username'], $_POST['email'], $hash); /* Error !!! */
        header("location:signin.php?msg=".$msg."");
        // } else {
        //     $message = '<label>Sorry can\'t create your account, please contact admin</label>';
        // }
    }
} 
?>

<!-- header -->
<?php include '../include/header_user.php'; ?>

<!-- menu -->
<?php include '../include/menu_user.php'; ?>

<!-- start container -->
<?php include '../include/title_user.php'; ?>
<br><br><br>
        <div class="content" style="text-align: center;">
            <h2 class="content-subhead">Profile: <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></h2>
            <div class="pure-u-1-4">
                <form class="pure-form" method="post" action="signup.php">
                    <input type="text"      name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars(trim($_POST['username'])); ?>"    placeholder="Username"  class="pure-input-rounded" required>
                    <input type="email"     name="email"    value="<?php if (isset($_POST['email'])) echo htmlspecialchars(trim($_POST['email'])); ?>"          placeholder="Email"     class="pure-input-rounded" required>
                    <input type="password"  name="password" value="<?php if (isset($_POST['password'])) echo htmlspecialchars(trim($_POST['password'])); ?>"    placeholder="Password"  class="pure-input-rounded" required>
                    <?php if(isset($message)) {echo '<label class="text-danger">'.$message.'</label>'; } ?><br>
                    <button type="submit" name="signup" class="pure-button">Sign Up</button>
                </form>
            </div><br><br><br>
            <!-- Slide -->
            <?php include '../include/slide.php'; ?>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include '../include/footer_user.php'; ?>








