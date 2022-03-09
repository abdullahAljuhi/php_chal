<form action="" method="post" enctype="multipart/form-data">
<p>Pictures:
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="submit" value="Send" />
</p>
</form>

<?php
if(isset($_FILES["pictures"]["error"])){
    echo "This file is uploded";
    foreach ($_FILES["pictures"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
            $name = basename($_FILES["pictures"]["name"][$key]);
            move_uploaded_file($tmp_name, "../img/$name");

            echo "<h3>$key: $name</h3>";
        }
    }
}
