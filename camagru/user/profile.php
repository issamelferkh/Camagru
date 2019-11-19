<!-- Session -->
<?php include '../include/session.php'; 
require_once("../config/connection.php");
?>

<?php

if(isset($_POST["update"])) {
    if (!empty($_POST["password"])) {
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
            $password = hash('whirlpool', $_POST['password']);
            $query = "UPDATE `user` SET `fname`=?, `lname`=?, `username`=?, `email`=?, `password`=? WHERE `id`=?";
            $query = $db->prepare($query);
            $query->execute([$_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['email'],$password,$_POST['id_user']]);
            $message = 'Your profile was successfully updated. thank you to re login for show your new profile information';
        }
    } else {
        $query = "UPDATE `user` SET `fname`=?, `lname`=?, `username`=?, `email`=? WHERE `id`=?";
        $query = $db->prepare($query);
        $query->execute([$_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['email'],$_POST['id_user']]);
        $message = 'Your profile was successfully updated. thank you to re login for show your new profile information';
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
                <form class="pure-form" method="post" action="profile.php">
                    <input type="hidden"    name="id_user"  value="<?php if (isset($_SESSION['id_user']))   echo htmlspecialchars(trim($_SESSION['id_user'])); ?>"      class="pure-input-rounded">
                    <input type="text"      name="fname"    value="<?php if (isset($_SESSION['fname']))     echo htmlspecialchars(trim($_SESSION['fname'])); ?>"        placeholder="First name" class="pure-input-rounded">
                    <input type="text"      name="lname"    value="<?php if (isset($_SESSION['lname']))     echo htmlspecialchars(trim($_SESSION['lname'])); ?>"        placeholder="Last name"  class="pure-input-rounded">
                    <input type="text"      name="username" value="<?php if (isset($_SESSION['username']))  echo htmlspecialchars(trim($_SESSION['username'])); ?>"     placeholder="Username"  class="pure-input-rounded">                    
                    <input type="password"  name="password" value="<?php if (isset($_POST['password']))     echo htmlspecialchars(trim($_POST['password'])); ?>"        placeholder="New Password"  class="pure-input-rounded">
                    <input type="email"     name="email"    value="<?php if (isset($_SESSION['email']))     echo htmlspecialchars(trim($_SESSION['email'])); ?>"        placeholder="Email"     class="pure-input-rounded">

                    <?php if(isset($message)) {echo '<label class="text-danger">'.$message.'</label>'; } ?><br>
                    <button type="submit" name="update" class="pure-button">Update Profile</button>
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








