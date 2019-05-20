<?php

$input = str_split(strtolower(readline()));
$alphabet = "abcdefghijklmnopqrstuvwxyz";
for ($i = 0; $i < count($input); $i++) {
    $pos = strpos($alphabet, $input[$i]);
    echo $input[$i] . " -> " . $pos . PHP_EOL;
}