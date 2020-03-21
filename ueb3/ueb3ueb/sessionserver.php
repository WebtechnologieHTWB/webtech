<?php
session_start();

if (isset($_POST['color'])) {
    #echo 'You choice of color is ' .  $_POST['color'];
    $antwort = "Hello " . $_POST['firstname'] . " " . $_POST['lastname'];
    $_SESSION['antwort'] = $antwort;
}
#http://127.0.0.1/webtech/ueb3/phpuebung2.php?firstname=Dustin&lastname=Brewer
?>
<h1 style="background-color: <?php echo $_POST['color']; ?>"> My Color </h1>
<body style="background-color: <?php echo $_POST['color']; ?>"> <!--</body>-->