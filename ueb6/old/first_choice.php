
<?php


$door_id = $_POST["door_id"];

$goat_door = random_int(0,2);


while ($goat_door == $door_id){
    $goat_door = random_int(0,2);
}

echo $goat_door;

