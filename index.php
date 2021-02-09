<?php



$welcomeMessage = "Hello,World!";
$age = 22;
$temperature = 22.5;
$isTodayTuesday = true;

$array = [
    $welcomeMessage,
    $age,
    $temperature,
    $isTodayTuesday
];


$assocArray = [
    "welcome" => $welcomeMessage,
    "age" => $age,
    "temperature" => $temperature,
    "isTuesday" => $isTodayTuesday
];


//print_r($assocArray["isTuesday"]);


for ($i = 0; $i <= 3; $i++) {
    echo $array[$i];
    echo "<br>";
}

$i = 0;
while ($i <= 3) {
    echo $array[$i];
    echo "<br>";
    $i++;
}


foreach ($assocArray as $key => $item) {
    echo $key;
    echo "<br>";
    echo $item;
    echo "<br>";
}