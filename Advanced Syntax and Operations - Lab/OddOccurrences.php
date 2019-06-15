<?php

$input = explode(' ', strtolower(readline()));
$words = [];

foreach ($input as $word) {
    if (!key_exists($word, $words))
        $words[$word] = 1;
    else
        $words[$word]++;
}

$print = [];
foreach ($words as $word => $count) {
    if ($words[$word] % 2 !== 0)
        $print[] = $word;
}
echo implode(', ', $print);