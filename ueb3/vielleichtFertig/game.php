<?php
session_start();
?>

<?php
if (empty($_SESSION['playerScore']) && empty($_SESSION['computerScore']) && empty($_SESSION['undecided'])) {
    $_SESSION['playerScore'] = 0;
    $_SESSION['computerScore'] = 0;
    $_SESSION['undecided'] = 0;

}
if (isset($_POST['playerChoice'])) {

    $playerChoice = $_POST['playerChoice'];
    $pcChoiceList = array('stone', 'paper', 'scissors');
    $randomChoice = rand(0, 2);
    $computerChoice = $pcChoiceList[$randomChoice];

    if ($_SESSION['playerScore'] <= 4 && $_SESSION['computerScore'] <= 4) {

        echo 'Your choice: ' . $playerChoice;
        echo '<br><br>';
        echo 'Computer\'s choice: ' . $computerChoice;
        echo '<br><br>';

        if ($playerChoice == $computerChoice) {
            $_SESSION['undecided'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'Undecided.';
        } else if ($playerChoice == 'stone' && $computerChoice == 'scissors') {
            $_SESSION['playerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You win.';
        } else if ($playerChoice == 'stone' && $computerChoice == 'paper') {
            $_SESSION['computerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You lose.';
        } else if ($playerChoice == 'scissors' && $computerChoice == 'stone') {
            $_SESSION['computerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You lose.';
        } else if ($playerChoice == 'scissors' && $computerChoice == 'paper') {
            $_SESSION['playerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You win';
        } else if ($playerChoice == 'paper' && $computerChoice == 'stone') {
            $_SESSION['playerScore'] += 1;
            echo "Your score: " . $_SESSION['playerScore'] . "<br>";
            echo "Computer's score: " . $_SESSION['computerScore'] . "<br>";
            echo "Undecided: " . $_SESSION['undecided'] . "<p>";
            echo 'You win.';
        } else if ($playerChoice == 'paper' && $computerChoice == 'scissors') {
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