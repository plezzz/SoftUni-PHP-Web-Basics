<?php

list($row, $col) = explode(" ", readline());

$matrix = [];

for ($i = 0; $i < $row; $i++) {
    $matrix[$i] = explode(" ", readline());
}

$resultStartAt = [4];
$biggestSum = PHP_INT_MIN;

for ($i = 0; $i < $row - 2; $i++) {
    for ($j = 0; $j < $col - 2; $j++) {

        $testSum = $matrix[$i][$j] + $matrix[$i][$j + 1] + $matrix[$i][$j + 2];
        $testSum += $matrix[$i + 1][$j] + $matrix[$i + 1][$j + 1] + $matrix[$i + 1][$j + 2];
        $testSum += $matrix[$i + 2][$j] + $matrix[$i + 2][$j + 1] + $matrix[$i + 2][$j + 2];

        if ($testSum > $biggestSum) {
            $biggestSum = $testSum;
            $resultStartAt[0] = $i;
            $resultStartAt[1] = $j;
        }
    }
}

$firstDigit = $matrix[$resultStartAt[0]][$resultStartAt[1]];
$secDigit = $matrix[$resultStartAt[0]][$resultStartAt[1] + 1];
$thirdDigit = $matrix[$resultStartAt[0]][$resultStartAt[1] + 2];
$fourDigit = $matrix[$resultStartAt[0] + 1][$resultStartAt[1]];
$fiveDigit = $matrix[$resultStartAt[0] + 1][$resultStartAt[1] + 1];
$sixDigit = $matrix[$resultStartAt[0] + 1][$resultStartAt[1] + 2];
$sevenDigit = $matrix[$resultStartAt[0] + 2][$resultStartAt[1]];
$eightDigit = $matrix[$resultStartAt[0] + 2][$resultStartAt[1] + 1];
$nineDigit = $matrix[$resultStartAt[0] + 2][$resultStartAt[1] + 2];

echo "Sum = $biggestSum\n";
echo "$firstDigit $secDigit $thirdDigit\n";
echo "$fourDigit $fiveDigit $sixDigit\n";
echo "$sevenDigit $eightDigit $nineDigit\n";
