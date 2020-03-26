<?php

session_start();

if (!(isset($_SESSION['losses']))){
    $_SESSION['losses'] = 0;
}
if (!(isset($_SESSION['wins']))){
    $_SESSION['wins'] = 0;
}

$door_id = $_POST["door_id"];
$goat_door = $_POST["firstGoatDoor"];
$car_door = random_int(0,2);

while ($goat_door == $door_id){
    $car_door = random_int(0,2);
}

if($car_door == $door_id){
    $_SESSION['wins'] +=1;
    echo 1;
}
else{
   $_SESSION['losses'] +=1;
    echo 0;
}
?>