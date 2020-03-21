<?php
session_start();

if(isset($_GET['exit']) == 1){
    session_destroy();
    header('Location: index.php');
}
?>

<form action="game.php" method="POST">
        Stone<input type="radio" value="stone" name="playerChoice"><br>
        Paper<input type="radio" value="paper" name="playerChoice"><br>
        Scissors<input type="radio" value="scissors" name="playerChoice"><br>
    <p><input type="submit" value=" Submit "></p>
</form>