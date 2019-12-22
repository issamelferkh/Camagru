<?php include '../include/session.php'; 
require_once("../config/connection.php");
?>

<?php

if(isset($_POST["update"]) && ($_SESSION["token"] === $_POST["token"])) {
    $query = 'SELECT * FROM user WHERE username="'.htmlspecialchars(trim($_POST['username'])).'" OR email="'.htmlspecialchars(trim($_POST['email'])).'"';
    $query = $db->prepare($query);
    $query->execute();
    $count = $query->rowCount();
    $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
    if ($count > 1) {
        $message = '<label>Sorry this username or email is already taken!</label>';
    } else {
        $query = 'SELECT * FROM user WHERE `user_id`="'.$_SESSION['user_id'].'" ';
        $query = $db->prepare($query);
        $query->execute();
        $count = $query->rowCount();
        $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
        if ($count > 0) {
            // check inputs
            if ($_POST['fname'] == '') {
                $fname = $la_case[0]['fname'];
            } else {
                $fname = htmlspecialchars($_POST['fname']);
            }
                
            if ($_POST['lname'] == '') {
                $lname = $la_case[0]['lname'];
            } else {
                $lname = htmlspecialchars($_POST['lname']);
            }
    
            if ($_POST['username'] == '') {
                $username = $la_case[0]['username'];
            } else {
                $username = htmlspecialchars(trim($_POST['username']));
            }
    
            if ($_POST['email'] == '') {
                $email = $la_case[0]['email'];
            } else {
                $email = htmlspecialchars(trim($_POST['email']));
            }
    
            if ($_POST['user_id'] == '') {
                $user_id = $la_case[0]['user_id'];
            } else {
                $user_id = htmlspecialchars($_POST['user_id']);
            }
    
            if(isset($_POST['notification']) && $_POST['notification'] == 1) {
                $notification = 1;
            } else {
                $notification = 0;
            }
            $query = "UPDATE `user` SET `fname`=?, `lname`=?, `username`=?, `email`=? ,`notification`=? WHERE `user_id`=?";
            $query = $db->prepare($query);
            $query->execute([$fname,$lname,$username,$email,$notification,$user_id]);
            $message = 'Your profile was successfully updated.';
            
        } else {
            $message = 'Sorry, your not a reel user !!!';
        }
    }    
}
?>

<?php include '../include/header_user.php'; ?>

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
            <h2 class="content-subhead">Update Profile: <?php echo $la_case[0]['fname'].' '.$la_case[0]['lname']; ?></h2>
            <div class="pure-u-1-4">
                <form class="pure-form" method="post" action="profile.php">
                    <input type="hidden"    name="token"        value="<?php echo $_SESSION['token']; ?>">
                    <input type="hidden"    name="user_id"      value="<?php if (isset($la_case[0]['user_id']))     echo htmlspecialchars($la_case[0]['user_id']); ?>"                                    class="pure-input-rounded">
                    <input type="text"      name="fname"        value="<?php if (isset($la_case[0]['fname']))       echo htmlspecialchars($la_case[0]['fname']); ?>"      placeholder="First name"        class="pure-input-rounded">
                    <input type="text"      name="lname"        value="<?php if (isset($la_case[0]['lname']))       echo htmlspecialchars($la_case[0]['lname']); ?>"      placeholder="Last name"         class="pure-input-rounded">
                    <input type="text"      name="username"     value="<?php if (isset($la_case[0]['username']))    echo htmlspecialchars(trim($la_case[0]['username'])); ?>"   placeholder="Username"          class="pure-input-rounded">                    
                    <input type="email"     name="email"        value="<?php if (isset($la_case[0]['email']))       echo htmlspecialchars(trim($la_case[0]['email'])); ?>"      placeholder="Email"             class="pure-input-rounded">
                    Notification <input type="checkbox" name="notification" value="1" <?php if ($la_case[0]['notification'] == 1) { echo "checked";} ?> />
                    <?php if(isset($message)) {echo '<label class="text-danger">'.$message.'</label>'; } ?><br>
                    <button type="submit" name="update" class="pure-button">Update Profile</button><br><br>
                    <a href='update_pwd.php' class='pure-button'>Update Password</a>
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








