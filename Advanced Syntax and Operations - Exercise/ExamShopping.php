<?php

$stocks = [];

while (true) {
    $input = readline();
    if ($input == "shopping time")
        break;
    list($command, $name, $quantity) = explode(" ", $input);

    if (!key_exists($name, $stocks))
        $stocks[$name] = $quantity;
    else
        $stocks[$name] += $quantity;
}
while (true) {
    $input = readline();
    if ($input == "exam time")
        break;
    list($command, $name, $quantity) = explode(" ", $input);

    if (key_exists($name, $stocks)) {
        if ($stocks[$name] > 0) {
            if (($stocks[$name] - $quantity) >= 0) {
                $stocks[$name] -= $quantity;
            } else {
                $stocks[$name] = 0;
            }
        } else {
            echo "$name out of stock\n";
        }
    } else {
        echo "$name doesn't exist\n";
    }
}
foreach ($stocks as $stock=>$quantity){
    if ($quantity>0)
    echo "$stock -> $quantity\n";
}