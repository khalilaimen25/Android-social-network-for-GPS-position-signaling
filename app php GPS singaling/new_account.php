<?php


header('Content-type : bitmap ; charset-utf-8');
if($_SERVER["REQUEST_METHOD"]=="POST"){


include_once 'connect.php';

  $reg_email = $_POST['reg_email'];
  $reg_passwd = $_POST['reg_passwd'];
  $reg_firstname = $_POST['reg_firstname'];
  $reg_lastname = $_POST['reg_lastname'];
  $reg_date = $_POST['reg_date'];

  $encoded_photo = $_POST['encoded_string'];
  $photo_name = $_POST['image_name'];


  $dencoded_photo = base64_decode($encoded_photo);

  $path = 'images/'.$photo_name ;

  $file = fopen($path , 'wb');

  $is_written = fwrite($file , $dencoded_photo);

  fclose($file);

  $verify = $DB->query("select count(*) from account where email = '$reg_email' and passwd = '$reg_passwd' ")->fetchColumn();


    if ($verify > 0) {
      echo "exist";
    }
    else
    {

      $req = $DB->query("insert into account
      values( default ,'$reg_firstname' , '$reg_lastname' , '$reg_email' , '$reg_passwd' , '$reg_date','$photo_name' ,'$path' , default,default)" );

        if ($req) {
          echo "success";
        }else {
          echo "failed";
        }


    }






}


?>
