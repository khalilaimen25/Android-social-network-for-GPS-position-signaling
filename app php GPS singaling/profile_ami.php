<?php

include 'connect.php';

$header = getallheaders();

$id = $header['id'];

$req = $DB->query("select* from account where id_account = '$id'");

$array = array();

while ($data = $req->fetch()) {
  $array[] = $data;
 }

 header('Content-Type: application/json');
 echo json_encode(array('infos' => $array ));

 ?>
