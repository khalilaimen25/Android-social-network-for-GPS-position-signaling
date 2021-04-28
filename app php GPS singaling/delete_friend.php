<?php

include 'connect.php';

$header = getallheaders();

$id_ac = $header['idac'];
$id_ami = $header['idami'];

$req = $DB->query("delete from amis where id_ac='$id_ac' and id_ami='$id_ami'");
$req2 = $DB->query("delete from amis where id_ac='$id_ami' and id_ami='$id_ac'");

if ($req and $req2) {
  echo "success";
}else {
  echo "failed";
}


 ?>
