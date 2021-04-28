<?php

include_once 'connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST") {

  $id_account = $_POST['id_account'];
  $post_text = $_POST['post_text'];
  $post_date = $_POST['post_date'];
  $post_position = $_POST['post_position'];

  $encoded_photo = $_POST['encoded_string'];
  $photo_name = $_POST['image_name'];


  $dencoded_photo = base64_decode($encoded_photo);

  $path = 'images_post/'.$photo_name ;

  $file = fopen($path , 'wb');

  $is_written = fwrite($file , $dencoded_photo);

  fclose($file);

  $req = $DB->query("insert into post values(default , '$id_account'  , '$post_text' , '$post_date' ,'$photo_name' ,'$path','$post_position')");

  if ($req) {
    echo "success";
  }else {
    echo "failed";
  }


}
 ?>
