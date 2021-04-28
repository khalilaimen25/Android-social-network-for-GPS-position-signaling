<?php

include 'connect.php';

if (isset($_POST['id']) and isset($_POST['psw'])) {
  $id = $_POST['id'];
  $psw = $_POST['psw'];
  $psw = md5($psw);

$req = $DB->query("select passwd from account where id_account = '$id'");

while ($data = $req->fetch()) {
  $psw2 = $data['psw'];
}

// 
// echo $psw;
// echo $psw2;

if ($psw == $psw2) {
  echo "success";
}else {
  echo "failed";
}

}
?>
