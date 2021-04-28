<?php

include_once 'connect.php';

  $header  = getallheaders();

  $id = $header['idaccount'];
  $req = $DB->query(" select id_account,firstname,lastname,position,etat,image_path from account ,amis
  where id_ami  = id_account and id_ac = '$id' ");

  $array = array();

  while ($data = $req->fetch()) {

    $array[] = $data;

  }


  header('Content-Type: application/json');
  echo json_encode(array('amis' => $array ));



 ?>
