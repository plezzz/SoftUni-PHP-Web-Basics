<?php

$arrayOne = explode(" ", readline());
$arrayTwo = explode(" ", readline());

if (count($arrayOne) > count($arrayTwo)) {
    $length = count($arrayOne);
    $diff = $length - count($arrayTwo);
    for ($i = 0; $i < $diff; $i++) {
        $arrayTwo[] = $arrayTwo[$i];
    }
} elseif (count($arrayOne) < count($arrayTwo)) {
    $length = count($arrayTwo);
    $diff = $length - count($arrayOne);
    for ($i = 0; $i < $diff; $i++) {
        $arrayOne[] = $arrayOne[$i];
    }
} else {
    $length = count($arrayOne);
}
for ($j = 0; $j < $length; $j++) {
    $num = $arrayOne[$j] + $arrayTwo[$j];
    echo $num . " ";
}