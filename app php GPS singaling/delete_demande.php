<?php

include 'connect.php';

$header = getallheaders();

$id_emet = $header['idemet'];
$id_recep = $header['idrecep'];

$req = $DB->query("delete from demande where id_emet='$id_emet' and id_recep='$id_recep'");

if ($req) {
  echo "success";
}else {
  echo "failed";
}


 ?>
