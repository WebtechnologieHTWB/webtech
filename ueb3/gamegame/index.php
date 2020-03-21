<?php
session_start();
$playerCounter = array(0, 1, 2, 3, 4, 5);
$_SESSION['playerCounter'] = $playerCounter;
$computerCounter = array(0, 1, 2, 3, 4, 5);
$_SESSION['computerCounter'] = $computerCounter;
//$choice = $_POST['choice'];
//$_SESSION['choice'] = $choice;
?>

<form method="post" action="server.php">
    Paper:<input type="radio" name="choice" value="paper"> <br>
    Scissors:<input type="radio" name="choice" value="scissors"> <br>
    Stone:<input type="radio" name="choice" value="stone">
    <p>
        <input type="submit" value=" Play ">
    <p><br>
</form>