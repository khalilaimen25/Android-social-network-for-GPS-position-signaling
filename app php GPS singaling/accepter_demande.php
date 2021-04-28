<?php

include_once 'connect.php';

$header = getallheaders();

$id_account = $header['idaccount'];
$id_ami = $header['idami'];

$req1 = $DB->query("insert into amis values(default , '$id_account' , '$id_ami')");

if ($req1) {
  echo "success";
  $req2 = $DB->query("delete from demande where id_recep = '$id_account' and id_emet = '$id_ami'");
  $req1 = $DB->query("insert into amis values(default  , '$id_ami' , '$id_account')");
}else {
  echo "failed";
}
?>
