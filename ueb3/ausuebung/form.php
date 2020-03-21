<?php
    session_start();
?>
<form method="get" action="server.php">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" id="lastname">
    <br>
    Red:<input type="radio" name= "color" value="red">
    Green:<input type="radio" name= "color" value="green">
    Blue:<input type="radio" name= "color" value="blue">
    <br>
    Yellow:<input type="radio" name= "color" value="yellow">
    Orange:<input type="radio" name= "color" value="orange">
    Purple:<input type="radio" name= "color" value="purple">
    <br>
    <input type ="submit" value =" send ">
</form>
<?php
    if(isset($_SESSION['answer'])){
        echo $_SESSION['answer'];
    }
?>