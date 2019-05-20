<?php

$input = explode(" ", readline());

$longestSeqLength = 1;
$longestSeqStart = 0;
$currentSeqLength = 1;
$currentSeqStart = 0;

for ($i = 1; $i < count($input); $i++) {
    if ($input[$i] > $input[$i - 1]) {
        $currentSeqLength++;

        if ($currentSeqLength > $longestSeqLength) {
            $longestSeqLength = $currentSeqLength;
            $longestSeqStart = $currentSeqStart;
        }
    } else {
        $currentSeqLength = 1;
        $currentSeqStart = $i;
    }
}

for ($i = $longestSeqStart; $i < $longestSeqStart + $longestSeqLength; $i++) {
    echo $input[$i]." ";
}