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
            $message = 'Your profile was successfully updated.';
        }
    } else {
        $query = "UPDATE `user` SET `fname`=?, `lname`=?, `username`=?, `email`=? WHERE `id`=?";
        $query = $db->prepare($query);
        $query->execute([$_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['email'],$_POST['id_user']]);
        $message = 'Your profile was successfully updated.';
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
<?php     
    $query = 'SELECT * FROM `user` WHERE `user_id`="'.$_SESSION['user_id'].'"';
    $query = $db->prepare($query);
    $query->execute();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
?>
        <div class="content" style="text-align: center;">
            <h2 class="content-subhead">Profile: <?php echo $la_case[0]['fname'].' '.$la_case[0]['lname']; ?></h2>
            <div class="pure-u-1-4">
                <form class="pure-form" method="post" action="profile.php">
                    <input type="hidden"    name="id_user"  value="<?php if (isset($la_case[0]['id']))   echo htmlspecialchars(trim($la_case[0]['id'])); ?>"      class="pure-input-rounded">
                    <input type="text"      name="fname"    value="<?php if (isset($la_case[0]['fname']))     echo htmlspecialchars(trim($la_case[0]['fname'])); ?>"        placeholder="First name" class="pure-input-rounded">
                    <input type="text"      name="lname"    value="<?php if (isset($la_case[0]['lname']))     echo htmlspecialchars(trim($la_case[0]['lname'])); ?>"        placeholder="Last name"  class="pure-input-rounded">
                    <input type="text"      name="username" value="<?php if (isset($la_case[0]['username']))  echo htmlspecialchars(trim($la_case[0]['username'])); ?>"     placeholder="Username"  class="pure-input-rounded">                    
                    <input type="password"  name="password" value="<?php if (isset($_POST['password']))       echo htmlspecialchars(trim($_POST['password'])); ?>"          placeholder="New Password"  class="pure-input-rounded">
                    <input type="email"     name="email"    value="<?php if (isset($la_case[0]['email']))     echo htmlspecialchars(trim($la_case[0]['email'])); ?>"        placeholder="Email"     class="pure-input-rounded">

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








