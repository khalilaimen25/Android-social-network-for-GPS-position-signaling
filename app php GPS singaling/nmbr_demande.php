<?php

include_once 'connect.php';

  $header = getallheaders();

  $id_account = $header['id'];

  $req = $DB->query("select count(*) from demande where id_recep = '$id_account'")->fetchColumn();

  if ($req) {
    echo $req;
  }


 ?>
