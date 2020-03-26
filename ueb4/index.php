<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "gruppe5";

include "DB.php";
include "PHPDB.php";

echo "<p><h1>EINS</h1></p>";

$dbTxt=new PHPDB($servername, $dbname, $username, $password);
$dbTxt->open();
$dbTxt->insert('plumbus',49.75,'household item'); echo "<br>";
$dbTxt->query('productname','plumbus'); echo "<br>";
$dbTxt->delete('productname','plumbus'); echo "<br>";
$dbTxt->close(); echo "<br>";

echo "<p><h1>ZWEI</h1></p>";

$dbTxt->open();
$dbTxt->insert('monchichi',19.89,'dolly'); echo "<br>";
$dbTxt->query('productname','monchichi'); echo "<br>";
$dbTxt->delete('productname','monchichi'); echo "<br>";
$dbTxt->close(); echo "<br>";

echo "<p><h1>DREI</h1></p>";

$sql=new DB($servername, $dbname, $username, $password); echo "<br>";
$sql->open();
$sql->insert('plumbus',49.75,'household item'); echo "<br>";
$sql->query('productname', 'plumbus'); echo "<br>";
$sql->delete('productname', 'plumbus'); echo "<br>";
$sql->close(); echo "<br>";

echo "<p><h1>VIER</h1></p>";

$sql->open();
$sql->insert('monchichi',19.89,'dolly'); echo "<br>";
$sql->query('productname', 'monchichi'); echo "<br>";
$sql->delete('productname', 'monchichi'); echo "<br>";
$sql->close(); echo "<br>";

