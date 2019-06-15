<?php

$input = explode(" ", readline());
$isFound = false;

for ($i = 0; $i < count($input); $i++) {
    for ($y = $i + 1; $y < count($input); $y++) {
        for ($z = 0; $z < count($input); $z++) {
            if ($input[$i] + $input[$y] == $input[$z]) {
                echo "$input[$i] + $input[$y] == $input[$z]\n";
                $isFound = true;
                break;
            }
        }
    }
}
if (!$isFound)
    echo "No";