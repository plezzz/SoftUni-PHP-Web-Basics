<?php

$input = strtolower(readline());

if ($input == "monday"
    || $input == "tuesday"
    || $input == "wednesday"
    || $input == "thursday"
    || $input == "friday"
    || $input == "saturday"
    || $input == "sunday") {
    Day($input);
} else
    echo "Invalid day!";

function Day($date)
{
    $date = new DateTime($date);
    echo $date->format('N');
}