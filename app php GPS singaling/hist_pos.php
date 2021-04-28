<?php

include 'connect.php';

$header  = getallheaders();

$id = $header['id'];
$x = $header['x'];
$y = $header['y'];
$pos = $header['position'];

$req = $DB->query("insert into positions (default , '$id' , '$x' , '$y' , '$pos')");

?>
