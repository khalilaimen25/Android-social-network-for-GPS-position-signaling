<?php

include_once 'connect.php';

if (isset($_POST['id_emet']) and isset($_POST['id_recep']))
{
  $id_emet = $_POST['id_emet'] ;
  $id_recep = $_POST['id_recep'] ;

  $nbr = $DB->query("select count(*) from demande where id_emet = '$id_emet' and id_recep = '$id_recep'")->fetchColumn();
  echo $nbr;
  if ($nbr < 1) {

    $req  = $DB->query("insert into demande values(default , '$id_emet' , '$id_recep') ");

    if ($req) {
      echo "success";
    }
    else {
      echo "failed";
    }

  }else {
  echo "exist";
  }
}

 ?>
