<?php

include 'connect.php';

header('Content-type : bitmap ; charset-utf-8');
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $encoded_photo = $_POST['encoded_string'];
  $photo_name = $_POST['image_name'];


  $dencoded_photo = base64_decode($encoded_photo);

  $path = 'images/'.$photo_name ;

  $file = fopen($path , 'wb');

  $is_written = fwrite($file , $dencoded_photo);

  fclose($file);


  $req = $DB->query("update account set image_name = '$photo_name' , image_path = '$path' )" );

    if ($req) {
      echo "success";
    }else {
      echo "failed";
    }



}



 ?>
