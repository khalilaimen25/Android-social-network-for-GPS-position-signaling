<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

include_once 'connect.php';

$login_email  = $_POST['login_email'];
$login_passwd  = $_POST['login_passwd'];




$req  = $DB->query("select count(*) from account where email = '$login_email' and passwd = '$login_passwd' ")->fetchColumn();

//while ($data = $req->fetch()) {

  if ($req > 0) {
    echo "success";
    $req2 = $DB->query("update account set etat = 'c' where  email = '$login_email' and passwd = '$login_passwd'");
  }
  else {
    echo "failed";
  }
//}



}

 ?>
