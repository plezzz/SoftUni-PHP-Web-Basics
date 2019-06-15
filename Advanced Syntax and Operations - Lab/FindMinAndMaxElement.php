<?php

list($row, $col) = explode(", ", readline());
$matrix = [];
for ($i = 0; $i < $row; $i++) {
    $matrix[] = array_map("intval", explode(", ", readline()));
}

$max = PHP_INT_MIN;
$min = PHP_INT_MAX;

foreach ($matrix as $colons) {
    $maxCurr = max($colons);
    $max = max($max, $maxCurr);
    $minCurr = min($colons);
    $min = min($min, $minCurr);
}

echo "Min: $min\n";
echo "Max: $max\n";