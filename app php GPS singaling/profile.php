<?php

//session_start();

include 'connect.php';

$header = getallheaders();

$email = $header['email'];
$passwd = $header['passwd'];
// $id = $header['id_account'];



//if($_SERVER["REQUEST_METHOD"]=="POST"){
//if(isset($_POST['email']) and isset($_POST['passwd'])) {


// $email = $_POST['email'];
 //$passwd = $_POST['passwd'];


//$email = 'a@a';
//$passwd = '00000';

$req = $DB->query("select * from account where email = '$email' and passwd = '$passwd' ");

$array = array();

while ($data = $req->fetch()) {

  $array[] = $data;

}




header('Content-Type: application/json');
echo json_encode(array('infos' => $array ));


//echo json_encode(array('nmbr_demande' => $array2 ));
//}



//}
?>
