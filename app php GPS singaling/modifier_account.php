<?php

include 'connect.php';

//
if (isset($_POST['id']) and isset($_POST['lname']) and isset($_POST['fname']) and isset($_POST['email']) and isset($_POST['passwd']) and isset($_POST['date'])  )
 {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
   $email = $_POST['email'];
   $passwd = $_POST['passwd'];
   $date = $_POST['date'];
  $id = $_POST['id'];

  $req = $DB->query("update account set firstname = '$fname',lastname = '$lname',
                    email = '$email' , passwd = '$passwd' , birthdate = '$date'
                    where id_account = '$id'");
  // and lastname = '$lname'
  //
  //                     where

if ($req) {
  echo "success";
}else {
  echo "failed";
}

}


 ?>
