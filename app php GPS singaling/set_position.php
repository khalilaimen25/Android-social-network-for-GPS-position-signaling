<?php



include 'connect.php';

header('Content-type: text/html; charset=UTF-8');

$header = getallheaders();
$pos = $header['position'];
$id = $header['id'];
$x = $header['x'];
$y = $header['y'];

  $req = $DB->query("update account set position = '$pos',pos_x = '$x' ,pos_y = '$y' where id_account = '$id'");



 ?>
