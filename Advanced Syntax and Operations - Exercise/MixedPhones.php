<?php

$phoneBook = [];

while (true) {
    $input = readline();
    if ($input == "Over")
        break;
    list($firstEl, $secEl) = explode(" : ", $input);

    if (is_string($firstEl)&&is_numeric($secEl)){
        $phoneBook[$firstEl]=$secEl;
    }elseif (is_numeric($firstEl)&&is_string($secEl)){
        $phoneBook[$secEl]=$firstEl;
    }
}
ksort($phoneBook);
foreach ($phoneBook as $name=>$phone){
    echo "$name -> $phone\n";
}