<?php
// include("config.php");
if(isset($_POST['imgUpload'])){
    $name = $_POST['imgUpload'];
    echo $name;
 
}
?>

<form method="POST" action="test.php">
    <label>Choose a picture:</label>
    <input type="file" name="imgUpload" accept="image/png, image/jpeg, image/jpg"><br><br>
    <input name="save" type="submit" class="pure-button" value="Save"><br><br>
</form>