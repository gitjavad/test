<?php
$company=$_POST['copmany'];
$cat=$_POST['categoury'];
$sn=$_POST['sn'];

$url="http://hirad-co.com/wp-content/plugins/hirad_shoping/upload/";

    $destination_path = getcwd().DIRECTORY_SEPARATOR;
$target_path = $destination_path . basename( $_FILES["profpic"]["name"]);
      move_uploaded_file($_FILES["pic"]["tmp_name"], $target_path);
      echo $_FILES["pic"]["name"]. "has been stor.";
                    
  
    

