<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(!($_FILES["fileToUpload"]["tmp_name"] == '')){
    $target_dir = "/opt/lampp/htdocs/camagru/camagru/user/mail/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
​
            echo "File is an image - " . $check["mime"] . ".";
            $data = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["fileToUpload"]["tmp_name"]));
            return($data);
        } 
        else 
        {
            echo "File is not an image.";
        }
    }
}
?>
    
</body>
</html>