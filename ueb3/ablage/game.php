<?php
session_start();
?>

<?php
if (empty($_SESSION['playerScore']) && empty($_SESSION['computerScore']) && empty($_SESSION['undecided'])) {
    $_SESSION['playerScore'] = 0;
    $_SESSION['computerScore'] = 0;
    $_SESSION['undecided'] = 0;

    /*    echo $_SESSION['playerScore'];
        echo $_SESSION['computerScore'];
        echo $_SESSION['undecided'];*/
}
if (isset($_POST['playerturn'])) {

    $playerturn = $_POST['playerturn'];
    $rpc = array('stone', 'paper', 'scissors');
    $rndm = rand(0, 2);
    $Computer = $rpc[$rndm];

    if ($_SESSION['playerScore'] <= 4 && $_SESSION['computerScore'] <= 4) {

        echo 'Your choice: ' . $playerturn;
        echo '<br><br>';
        echo 'Computer\'s choice: ' . $Computer;
        echo '<br><br>';

        if ($playerturn == $Computer) {
            $_SESSION['undecided'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'Undecided.';
        } else if ($playerturn == 'stone' && $Computer == 'scissors') {
            $_SESSION['playerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You win.';
        } else if ($playerturn == 'stone' && $Computer == 'paper') {
            $_SESSION['computerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You lose.';
        } else if ($playerturn == 'scissors' && $Computer == 'stone') {
            $_SESSION['computerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You lose.';
        } else if ($playerturn == 'scissors' && $Computer == 'paper') {
            $_SESSION['playerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You win';
        } else if ($playerturn == 'paper' && $Computer == 'stone') {
            $_SESSION['playerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You win.';
        } else if ($playerturn == 'paper' && $Computer == 'scissors') {
            $_SESSION['computerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You lose.';
        } else {
            echo 'error :(';
        }
        if ($_SESSION['playerScore'] == 5 || $_SESSION['computerScore'] == 5) {
            if ($_SESSION['playerScore'] == 5) {
                echo '<p><b>Congratulation, you win the game. Please press the exit-button.</b>';
            }
            if ($_SESSION['computerScore'] == 5) {
                echo '<p><b>Shame you, you lose the game. Press the exit-button and stand in the corner and cry.</b>';
            }
        }
        /*    } else if ($_SESSION['playerScore'] = 5 || $_SESSION['computerScore'] = 5){
                echo '<h1>The game is finished. Press the exit-button.</h1>';
            } else if ($_SESSION['playerScore'] = 6 || $_SESSION['computerScore'] = 6){
                echo '<h1>No, the game is not running, it\'s finished. Press the exit-button.</h1>';
            } else if ($_SESSION['playerScore'] = 7 || $_SESSION['computerScore'] = 7){
                echo '<h1>Get the fuck out of here. Press the exit-button!</h1>';*/
    } else {
        echo '<h1>Get the fuck out of here. Press the fucking exit-button, now!</h1>';
    }
} else {
    echo "You didn't make a choice. Please select a choice of paper, scissors or stone.";
}
?>
<br>
<hr><br>
<button type="submit" onclick="window.location.href='index.php'"> play again</button>
<button type="submit" onclick=window.location.href="index.php?exit=1"> exit</button>