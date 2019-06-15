<?php
$numbers = array_map("strval", explode(" ", readline()));
$answer=[];

foreach ($numbers as $number){
    if (!key_exists($number, $answer))
        $answer[$number]=1;
    else
        $answer[$number]++;
}
ksort($answer);
foreach ($answer as $num=>$count){
    echo $num." -> ".$count.PHP_EOL;
}