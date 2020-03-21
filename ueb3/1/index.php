<?php
session_start();    //session start
//if(!isset($_SESSION['username']))     //if session not found redirect to homepage
//{
//    header('location:login.php');
//}
//else{
    echo '<form action="game.php" method="post" />
            <input type="radio" name="user_choice" value="Rock" title="Rock" />Rock <br /><br />
            <input type="radio" name="user_choice" value="Paper" title="Paper" />Paper <br /><br />
            <input type="radio" name="user_choice" value="Scissors" title="Scissors" />Scissors <br /><br />
            <input type="submit" name="form_submit" value="submit"/> 
            </form> ';
//}
?>