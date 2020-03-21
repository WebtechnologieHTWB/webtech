<?php
session_start();

$_SESSION['color'] = 'red';
$_SESSION['name'] = 'Dustin';
$_SESSION['age'] = '20';

var_dump($_SESSION);
echo "<br><br>";
print_r($_SESSION);
?>