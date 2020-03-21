<?php
session_start();
?>
<!--
<form method="get" action="">
    Firstname: <input type="text" name="firstname">
    Lastname: <input type="text" name="lastname">
    <input type="submit" value=" Send ">
</form>
-->

<form method="post" action="sessionserver.php">

    Firstname: <input type="text" name="firstname">
    Lastname: <input type="text" name="lastname">
    <!-- <input type="submit" value=" Send "> --><br>

    Red: <input type="radio" name="color" value="red">
    Yellow: <input type="radio" name="color" value="yellow">
    Blue: <input type="radio" name="color" value="blue">
    Green: <input type="radio" name="color" value="green">
    <input type="submit" value=" Send ">
</form>

<?php

?>