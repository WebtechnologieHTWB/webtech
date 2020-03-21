<?php
session_start();

?>


<?php

if(isset($_GET['firstname']) && isset($_GET['lastname']))
{
    $answer = "Hallo " . $_GET['firstname'] . " " . $_GET['lastname'];
    $color = $_GET['color'];
    $_SESSION['answer']=$answer;
    $_SESSION['color']=$color;
    #unset($_SESSION['answer']);
    #session_destroy();
    header('Location:' . 'form.php');
    exit;

}

?>
<body style="background-color: <?php $_SESSION[''] ?>"
