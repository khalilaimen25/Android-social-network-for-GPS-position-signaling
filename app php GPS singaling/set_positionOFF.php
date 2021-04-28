<?php


include 'connect.php';

header('Content-type: text/html; charset=UTF-8');

$header = getallheaders();

$id = $header['id'];

  $req = $DB->query("update account set position = 'null',pos_x = 'null' , pos_y = 'null' where id_account = '$id'");



 ?>
