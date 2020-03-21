<?php
session_start();



if(empty($_SESSION['playerScore']) && empty($_SESSION['computerScore']) && empty($_SESSION['undecided'])){
    $_SESSION['playerScore'] = 0;
    $_SESSION['computerScore'] = 0;
    $_SESSION['undecided'] = 0;

    echo $_SESSION['playerScore'];
    echo $_SESSION['computerScore'];
    echo $_SESSION['undecided'] ;
}
$playerChoice = $_POST['playerChoice'];
$randomChoiceList= array('stone', 'paper', 'scissors');
$randomNumber= rand(0,2);
$computerChoice=$randomChoiceList[$randomNumber];

echo 'Your choice is: '.$playerChoice;
echo '<br><br>';
echo 'The computer\'s choice is: '. $computerChoice;
echo '<br><br>';
if ($playerChoice == $computer){
    $_SESSION['undecided']+=1;
    echo "Your score: ".$_SESSION['playerScore']."<br>";
    echo "Computer\'s score: ".$_SESSION['computerScore']."<br>" ;
    echo "undecided:".$_SESSION['undecided']."<br>";
}
else if($playerChoice == 'stone' && $computerChoice == 'scissors'){
    $_SESSION['playerScore']+=1;
    echo "Your score: ".$_SESSION['playerScore']."<br>";
    echo "Computer\'s score: ".$_SESSION['computerScore']."<br>" ;
    echo "undecided:".$_SESSION['undecided']."<br>";
    echo '<h1>You win!</h1>';
}
else if($playerChoice == 'stone' && $computerChoice == 'paper'){
    $_SESSION['computerScore']+=1;
    echo "Your score: ".$_SESSION['playerScore']."<br>";
    echo "Computer\'s score: ".$_SESSION['computerScore']."<br>" ;
    echo "undecided:".$_SESSION['undecided']."<br>";
    echo  '<h1>You lose! </h1>';
}
else if($playerChoice == 'scissors' && $computerChoice == 'stone'){
    $_SESSION['computerScore']+=1;
    echo "Your score: ".$_SESSION['playerScore']."<br>";
    echo "Computer\'s score: ".$_SESSION['computerScore']."<br>" ;
    echo "undecided:".$_SESSION['undecided']."<br>";
    echo  ' <h1>You lose!</h1> ';
}
else if($playerChoice == 'scissors' && $computerChoice == 'paper'){
    $_SESSION['playerScore']+=1;
    echo "Your score: ".$_SESSION['playerScore']."<br>";
    echo "Computer\'s score: ".$_SESSION['computerScore']."<br>" ;
    echo "undecided:".$_SESSION['undecided']."<br>";
    echo '<h1> You win! </h1>';
}
else if($playerChoice == 'paper' && $computerChoice == 'stone'){
    $_SESSION['playerScore']+=1;
    echo "Your score: ".$_SESSION['playerScore']."<br>";
    echo "Computer\'s score: ".$_SESSION['computerScore']."<br>" ;
    echo "undecided:".$_SESSION['undecided']."<br>";
    echo '<h1>You win!</h1>';
}
else if($playerChoice == 'paper' && $computerChoice == 'scissors'){
    $_SESSION['computerScore']+=1;
    echo "Your score: ".$_SESSION['playerScore']."<br>";
    echo "Computer\'s score: ".$_SESSION['computerScore']."<br>" ;
    echo "undecided:".$_SESSION['undecided']."<br>";
    echo '<h1>You lose!</h1>' ;
}

?>

<button type="submit" onclick="window.location.href='index.php'"> play again </button><br>
<button type = "submit"><a href="2/index.php?exit=1"> exit game </a></button>
