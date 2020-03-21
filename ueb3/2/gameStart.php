<?php
session_start();

if(isset($_GET['exit']) == 1){
    session_destroy();
    header('Location: gameStart.php');
}
?>
<html>
<head>
    <title>Rock Paper Scissors Game</title>
</head>
<body>
<h1> Rock Paper Scissors Game</h1>
<form action="gameResult.php" method="POST">
    <p>Please Choose Your Player</p>
    <h2>Rock<input type="radio" value="rock" name="playerturn"  /><br />
        Paper<input type="radio" value="paper" name="playerturn"  /><br />
        Scissors<input type="radio" value="scissors" name="playerturn" /><br />
    </h2>
    <p><input type="submit" value="Play"></p>
</form>
</body>
</html>