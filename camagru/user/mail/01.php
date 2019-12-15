<html>
<?php
if (isset($_FILES["imgUpload"])) {
    if(!($_FILES["imgUpload"]["tmp_name"] == '')){
        $target_dir = "/opt/lampp/htdocs/camagru/camagru/user/mail/";
        $target_file = $target_dir . basename($_FILES["imgUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["imgUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - ".$check["mime"].".";
                $data = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["imgUpload"]["tmp_name"]));
                return($data);
            } 
            else 
            {
                echo "File is not an image.";
            }
        }
    }
}
?>
<body>
    <form method="post"  action="01.php" enctype="multipart/form-data">
        <!-- <input id="base64" type="text" name="img" value="" hidden> -->
        <input type="file" name="imgUpload" accept="image/png, image/jpeg, image/jpg">
        <input  id="snap" type="submit" name="submit">          
    </form>
</body>
</html>

<!-- ############################################################################# -->





