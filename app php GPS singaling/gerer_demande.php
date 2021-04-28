<?php

include_once 'connect.php';

  $header  = getallheaders();

  $id = $header['idaccount'];
  $req = $DB->query(" select id_account,firstname,lastname,image_path from account,demande where id_emet  = id_account and id_recep = '$id' ");

  $array = array();

  while ($data = $req->fetch()) {

    $array[] = $data;

  }


  header('Content-Type: application/json');
  echo json_encode(array('demandes' => $array ));



 ?>
