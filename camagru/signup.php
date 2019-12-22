<?php
session_start();
require_once("config/connection.php");
function ft_send_email($username,$email,$hash){

    $to      = $email; // Send email to our user
    $subject = 'Camagru | Signup - Verification'; // Give the email a subject 
    $message = '
     
    Hi "'.$username.'",

    Your account has been created, you can login with the following username and password after you have activated your account by pressing the url below.

    Please click this link to activate your account:
    https://10.12.100.163/camagru/verify.php?email='.$email.'&hash='.$hash.'
     
    Thanks for using Camagru!
    '; // Our message above including the link
                         
    $headers = 'From:no-reply@camagru.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email
}

if(isset($_POST["signup"])) {
    if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])) {
        $message = '<label>All fields are required.</label>';
    } else {
        $hash = md5(rand(0,1000));
        $password = hash('whirlpool', $_POST['password']);
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
            $query = 'SELECT * FROM user WHERE username="'.$_POST['username'].'" OR email="'.$_POST['email'].'"';
            $query = $db->prepare($query);
            $query->execute();
            $count = $query->rowCount();
            $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
            if ($count > 0) {
                $message = '<label>Username is already taken!</label>';
            } else {
                $notification = 1;
                $query = 'INSERT INTO `user` (`username`, `email`, `password`, `hash`, `notification`) VALUES (?,?,?,?,?)';
                $query = $db->prepare($query);
                $query->execute([$_POST['username'],$_POST['email'],$password,$hash,$notification]);
                ft_send_email($_POST['username'], $_POST['email'], $hash);
                $msg = 'Please active your account by clicking the activation link that has been send to your email.';
                header("location:signin.php?msg=".$msg."");
            }
        } 
    }
} 
?>

<?php include 'include/header.php'; ?>

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








