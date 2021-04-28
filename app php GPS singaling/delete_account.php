<?php

include 'connect.php';

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  $req = $DB->query("delete from account where id_account = '$id'");

  if ($req) {
    echo "success";

    $req2 = $DB->query("delete from amis where id_ac = '$id' OR id_ami = '$id'");
    $req3 = $DB->query("delete from demande where id_emet = '$id' OR id_recep = '$id'");
    $req4 = $DB->query("delete from post where id_post_account = '$id' ");

  }else {
    echo "failed";
  }
}

 ?>
