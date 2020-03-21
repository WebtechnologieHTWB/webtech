<h1> Rock Paper Scissors Game</h1>
<?php
if($_POST['playerturn']){

}

else if(!$_POST['playerturn']){

}
$playerturn = $_POST['playerturn'];
$rpc= array('rock', 'paper', 'scissors');
$rndm= rand(0,2);
$Computer=$rpc[$rndm];

echo '<h2>You picked: '.$playerturn.'</h2>';
echo '<br /><br />';
echo '<h2>The computer picked: '. $Computer .'</h2>';
echo '<br /><br />';
if($playerturn == $Computer){
}
if ($playerturn == $Computer){
    echo ' Draw  ';
}
else if($playerturn == 'rock ' && $Computer == 'scissors'){
    echo '<h1>You Win!</h1>';
}
else if($playerturn == 'rock' && $Computer == 'paper'){
    echo  '<h1>You Lose! </h1>';
}
else if($playerturn == 'scissors' && $Computer == 'rock'){
    echo  ' <h1>You Lose!</h1> ';
}
else if($playerturn == 'scissors' && $Computer == 'paper'){
    echo '<h1> You Win! </h1>';
}
else if($playerturn == 'paper' && $Computer == 'rock'){
    echo '<h1>You Win!</h1>';
}
else if($playerturn == 'paper' && $Computer == 'scissors'){
    echo '<h1>You Lose!</h1>' ;
}

?>
<hr>
</br></br>
<button type="button" onclick="window.location.href='index.php'">Play Again</button>