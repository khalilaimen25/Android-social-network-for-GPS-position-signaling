<?php

header('Content-type : bitmap ; charset-utf-8');

if($_SERVER["REQUEST_METHOD"]=="POST"){

include_once 'connect.php';

$encoded_photo = $_POST['encoded_string'];
$photo_name = $_POST['image_name'];


$dencoded_photo = base64_decode($encoded_photo);

$path = 'images/'.$photo_name ;

$file = fopen($path , 'wb');

$is_written = fwrite($file , $dencoded_photo);

fclose($file);


if($is_written > 0)
{
  $req = $DB->query("insert into account (image_name , image_path) values( '$photo_name' , '$path' ) ");

  if ($req) {
    echo "success";
  }else {
    echo "failed";
  }


}
}
 ?>
