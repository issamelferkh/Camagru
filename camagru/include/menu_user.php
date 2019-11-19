<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Camagru</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="gallery.php" class="pure-menu-link">Gallery</a></li>
            <li class="pure-menu-item"><a href="montage.php" class="pure-menu-link">Montage</a></li>
            <li class="pure-menu-item"><a href="profile.php" class="pure-menu-link"><?php if (!empty($_SESSION['username'])) echo $_SESSION['fname']; else echo "Username"; ?></a></li>
            <li class="pure-menu-item"><a href="../include/logout.php" class="pure-menu-link">LogOut</a></li>
        </ul>
    </div>
</div>

