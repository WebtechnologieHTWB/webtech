<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ue4";

include "DB.php";
include "PHPDB.php";

$dbTxt=new PHPDB($servername, $dbname, $username, $password);
$dbTxt->open();
$dbTxt->insert('plumbus','4.30','17');
$dbTxt->query('productname','bananas');
$dbTxt->delete('productname','plums');
$dbTxt->close();


$dbTxt->open();
$dbTxt->insert('avodados','2.10','1');
$dbTxt->query('productname','oranges');
$dbTxt->delete('productname','oranges');
$dbTxt->close();


$sql=new PHPDB($servername, $dbname, $username, $password);
$sql->open();
$sql->insert('plums','4.30','17');
$sql->query('productname', 'bananas');
$sql->delete('productname', 'plums');
$sql->close();

$sql->open();
$sql->insert('avodados','2.10','1');
$sql->query('productname', 'oranges');
$sql->delete('productname', 'oranges');
$sql->close();

