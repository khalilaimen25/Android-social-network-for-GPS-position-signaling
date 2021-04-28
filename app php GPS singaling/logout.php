<?php

include 'connect.php';

$header = getallheaders();

$id_account = $header['idaccount'];
$etat = $header['etat'];

if ($etat == 'offline') {
  $req = $DB->query("update account set etat = 'd' where id_account = '$id_account'");
}
if ($etat == 'online') {
  $req = $DB->query("update account set etat = 'c' where id_account = '$id_account'");  
}

?>
