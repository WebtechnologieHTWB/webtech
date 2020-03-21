<?php
session_start();

$wins = $_SESSION['wins'];
$losses = $_SESSION['losses'];

// destroy the session 

echo "You have won ".$wins." times and lost ".$losses." times.";
session_unset(); 
session_destroy();
?>