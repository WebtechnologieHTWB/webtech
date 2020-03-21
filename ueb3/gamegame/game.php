<?php
session_start();
$player = 0;
$_SESSION['player'] = $player;
$computer = 0;
$_SESSION['computer'] = $computer;
//$choice = $_POST['choice'];
//$_SESSION['choice'] = $choice;
?>

<form method="post" action="server.php">
    Paper:<input type="radio" name="choice" value="paper"> <br>
    Scissors:<input type="radio" name="choice" value="scissors"> <br>
    Stone:<input type="radio" name="choice" value="stone"> <p>
        <input type="submit" value=" Play "> <p><br>
</form>