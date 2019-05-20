<?php

list($row, $col) = explode(", ", readline());

$matrix = [];

for ($i = 0; $i < $row; $i++) {
    $matrix[$i] = explode(", ", readline());
}

$resultStartAt = [2];
$biggestSum = PHP_INT_MIN;

for ($i = 0; $i < $row - 1; $i++) {
    for ($j = 0; $j < $col - 1; $j++) {

        $testSum = $matrix[$i][$j] + $matrix[$i][$j + 1] + $matrix[$i + 1][$j] + $matrix[$i + 1][$j + 1];

        if ($testSum > $biggestSum) {
            $biggestSum = $testSum;
            $resultStartAt[0] = $i;
            $resultStartAt[1] = $j;
        }
    }
}

$firstDigit = $matrix[$resultStartAt[0]][$resultStartAt[1]];
$secDigit = $matrix[$resultStartAt[0]][$resultStartAt[1] + 1];
$thirdDigit = $matrix[$resultStartAt[0] + 1][$resultStartAt[1]];
$fourDigit = $matrix[$resultStartAt[0] + 1][$resultStartAt[1] + 1];

echo "$firstDigit $secDigit\n";
echo "$thirdDigit $fourDigit\n";
echo $biggestSum;