<?php
session_start();
#$choice = $_POST['choice'];
#$_SESSION['choice'] = $choice;
$playerCounter = array(0, 1, 2, 3, 4, 5);
#$playerCounter = [0, 1, 2, 3, 4, 5];
$_SESSION['playerZaehler'] = $playerCounter;
$computerCounter = array(0, 1, 2, 3, 4, 5);
$_SESSION['computerZaehler'] = $computerCounter;
/*
$play = array(  3    => 'stone',
                2    => 'scissors',
                1    => 'paper'
         );
*/

if (isset($_POST['choice'])) {
    #if ($c < 5 || $p < 5) {
    if ($_POST["choice"] == 'scissors') {
        $computer = rand(1, 3);
        switch ($computer) {
            case 1:
                echo "You win. Computer choose paper.";
                var_dump(count($playerCounter));
                break;
            case 2:
                echo "Undecided. Computer choose scissors.";
                break;
            case 3:
                echo "You lose. Computer choose stone.";
                var_dump(count($computerCounter));
                break;
        }
    }
    if ($_POST["choice"] == 'stone') {
        $computer = rand(1, 3);
        switch ($computer) {
            case 1:
                echo "You lose. Computer choose paper.";
                $computerCounter++;
                break;
            case 2:
                echo "You win. Computer choose scissors.";
                $playerCounter++;
                break;
            case 3:
                echo "Undecided. Computer choose stone.";
                break;
        }
    }
    if ($_POST["choice"] == 'paper') {
        $computer = rand(1, 3);
        switch ($computer) {
            case 1:
                echo "Undecided. Computer choose paper.";
                break;
            case 2:
                echo "You lose. Computer choose scissors.";
                $computerCounter++;
                break;
            case 3:
                echo "You win. Computer choose stone.";
                $playerCounter++;
                break;
        }
    }
    #}
    echo "<br>";
    echo "Player: ";
    echo sizeof($playerCounter);
    echo "<br>";
    echo "Computer: ";
    echo sizeof($computerCounter);
    echo "<br>";
    #echo "Computer: " .  . " Player: " . $playerCounter;
}
?>
<br><br>
<form action="index.php" method="post">
    <input name="submitBackButton" type="submit" value=" Back ">
</form>
<?php if (isset($_POST['submitBackButton'])) {
    // Do required actions here
    header('Location:' . 'index.php');
    exit;
}
?>
