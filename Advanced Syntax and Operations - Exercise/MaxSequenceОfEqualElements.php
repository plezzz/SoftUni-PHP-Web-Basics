<?php

$input = explode(" ", readline());

$best = 0;
$most = "";
for ($i = 0; $i < count($input); $i++) {
    $count = 0;
    for ($j = $i; $j < count($input); $j++) {
        if ($input[$i] == $input[$j])
            $count++;
        else
            break;
    }
    if ($count > $best) {
        $best = $count;
        $most = $input[$i];
    }
}

echo str_repeat($most . " ", $best);

