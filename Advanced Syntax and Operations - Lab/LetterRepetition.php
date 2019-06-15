<?php

$input = readline();
$chars = [];

for($i=0;$i<strlen($input);$i++){
    if (!key_exists($input[$i], $chars))
        $chars[$input[$i]] = 1;
    else
        $chars[$input[$i]]++;
}
foreach ($chars as $char => $count) {
    echo "$char -> $count\n";
}