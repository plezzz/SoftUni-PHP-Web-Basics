<?php

$phoneBook = [];

while (true) {
    $input = readline();
    if ($input == "END")
        break;
    list($command, $name, $phone) = array_pad(explode(" ", $input), 3, null);

    switch ($command) {
        case "A":
            $phoneBook[$name] = $phone;
            break;
        case "S":
            if (key_exists($name, $phoneBook))
                echo "$name -> $phoneBook[$name]\n";
            else
                echo "Contact $name does not exist.\n";
            break;
        default:
            break;
    }
}