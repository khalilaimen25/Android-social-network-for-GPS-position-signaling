<?php

include_once 'connect.php';

$header = getallheaders();

$id_account = $header['idaccount'];
$id_ami = $header['idami'];

$req = $DB->query("delete from demande where id_emet = '$id_ami' and id_recep = '$id_account'");

if ($req) {
  echo "success";
}
else {
  echo "failed";
}
 ?>
