<?php

$target_dir = "up/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
