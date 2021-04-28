<?php

try{
$DB= new PDO('mysql:host=localhost;dbname=android_app;charset=utf8','root','',
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}catch(Exception $e)
{
die('erreur :'.$e->getMessage());
}
?>
