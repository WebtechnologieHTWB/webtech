<?php
$string = "Salut";
$name = 'Nom';

echo $string . " " . $name . "<br>";
echo "$string $name" . "<br>";
echo '$string $name' . "<br>";

$integer = 1;
$float = 2.4;
$bool = true;

$normalarray = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$arrayhashmap = ['Dustin'=>20, 'Flori'=>19, 'Tino'=>15];

#numeric array
for ($i=0; $i<count($normalarray); $i++){
    echo $normalarray[$i] . " - ";
    if($i==count($normalarray)-1){
        echo "<br>" . "<br>";
    }
}

#hash associative array
foreach ($arrayhashmap as $key=>$value){
    echo $key . " " . $value . "<br>";
}
?>