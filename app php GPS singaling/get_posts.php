<?php

include_once 'connect.php';

$header = getallheaders();

$id = $header['idaccount'];

$req = $DB->query("select text,date,firstname,lastname,Pimage_name,Pimage_path,Pposition,image_path from post,account where id_post_account = '$id' and id_account = '$id'
                   or id_post_account in
                  (select id_ami from amis where id_ac = '$id' and
                  id_account = id_ami )" );

//$req = $DB->query("select * from post");
$array = array();

while ($data = $req->fetch()) {
  $array[] = $data ;
}

header('Content-Type: application/json');
echo json_encode(array('posts' => $array ));

 ?>
