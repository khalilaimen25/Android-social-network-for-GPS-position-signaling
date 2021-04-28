<?php

include_once 'connect.php';

$header = getallheaders();

$id = $header['idaccount'];

$req = $DB->query("select * from positions where id_account_adr = '$id' ");

$array = array();

while ($data = $req->fetch()) {
  $array[] = $data ;
}

header('Content-Type: application/json');
echo json_encode(array('positions' => $array ));


 ?>
