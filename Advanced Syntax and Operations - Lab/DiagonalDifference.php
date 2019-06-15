<?php

$row = readline();

$matrix = [];
for ($i = 0; $i < $row; $i++) {
    $matrix[] = array_map("intval", explode(" ", readline()));
}

$primaryDiagonal = [];
$secondaryDiagonal = [];
$counter = $row - 1;
for ($i = 0; $i < $row; $i++) {
    $primaryDiagonal[] = $matrix[$i][$i];
    $secondaryDiagonal[] = $matrix[$counter][$i];
    $counter--;
}
$sumPrime = array_sum($primaryDiagonal);
$sumSecond = array_sum($secondaryDiagonal);
if ($sumPrime >= $sumSecond)
    $diff = $sumPrime - $sumSecond;
else
    $diff = $sumSecond - $sumPrime;

echo $diff;