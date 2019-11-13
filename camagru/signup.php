<?php
session_start();
require_once("config/connection.php");

if(isset($_POST["signup"])) {
    // if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])) {
    //     $message = '<label>All fields are required.</label>';
    // }

    $pwdlen = strlen($_POST['password']);
    $uppercase = preg_match('@[A-Z]@', $_POST['password']);
    $lowercase = preg_match('@[a-z]@', $_POST['password']);
    $number    = preg_match('@[0-9]@', $_POST['password']);
    $specialChars = preg_match('@[^\w]@', $_POST['password']);

    if($pwdlen < 8) {
        $message = '<label>Invalid password. Password must be at least 8 characters.</label>';
    } else if(!$uppercase || !$lowercase || !$number || !$specialChars) {
        $message = 'Password should be include at least one upper case letter, one number, and one special character.';
    } else {        
        $query = 'SELECT * FROM user WHERE username="'.$_POST['username'].'" AND password="'.hash('whirlpool', $_POST['password']).'"';
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
            <h2 class="content-subhead">Sign Up</h2>
            <div class="pure-u-1-4">
                <form class="pure-form" method="post" action="signup.php">
                    <input type="text"      name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars(trim($_POST['username'])); ?>"    placeholder="Username"  class="pure-input-rounded" required>
                    <input type="email"     name="email"    value="<?php if (isset($_POST['email'])) echo htmlspecialchars(trim($_POST['email'])); ?>"          placeholder="Email"     class="pure-input-rounded" required>
                    <input type="password"  name="password" value="<?php if (isset($_POST['password'])) echo htmlspecialchars(trim($_POST['password'])); ?>"    placeholder="Password"  class="pure-input-rounded" required>
                    <?php if(isset($message)) {echo '<label class="text-danger">'.$message.'</label>'; } ?><br>
                    <button type="submit" name="signup" class="pure-button">Sign Up</button>
                </form>
            </div><br><br><br>
            <?php include 'include/slide.php'; ?>
        </div>
    </div>
</div>
<!-- end container -->

<!-- footer -->
<?php include 'include/footer.php'; ?>








