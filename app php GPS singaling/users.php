<?php


include 'connect.php';

$header = getallheaders();

$id =  $header['id'];


$req = $DB->query("select * from account where id_account <> '$id' and id_account not in
                  (select id_ami from amis where id_ac = '$id') and id_account not in
                  (select id_emet from demande where id_recep = '$id')");

$array = array();

while ($data = $req->fetch()) {

  $array[] = $data;

}


header('Content-Type: application/json');
echo json_encode(array('users' => $array ));


 ?>
