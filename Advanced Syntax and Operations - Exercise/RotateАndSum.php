<?php

$num = explode(" ", readline());
$rotations = readline();
$sum = array_fill(0, count($num), 0);


for ($i = 0; $i < $rotations; $i++) {
    $lastElement = array_pop($num);
    array_unshift($num, $lastElement);
    for ($j = 0; $j < count($num); $j++) {
        $sum[$j] += $num[$j];
    }
}
echo implode(" ", $sum);