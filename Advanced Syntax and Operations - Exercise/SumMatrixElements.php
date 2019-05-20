<?php

list($row, $col) = explode(", ", readline());

$matrix = [];
for ($i = 0; $i < $row; $i++) {
    $matrix[$i] = explode(", ", readline());
}

$sum = 0;
foreach ($matrix as $value) {
    $sum += array_sum($value);
}

echo $row . PHP_EOL;
echo $col . PHP_EOL;
echo $sum . PHP_EOL;
