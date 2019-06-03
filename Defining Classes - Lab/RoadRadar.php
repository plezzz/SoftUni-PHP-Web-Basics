<?php
$speed = readline();
$area = readline();
$speedLimit = getLimit($area);
getSpeed($speed, $speedLimit);

function getSpeed(int $speed, int $speedLimit)
{
    $overSpeed = $speed - $speedLimit;
    if ($overSpeed >= 0 && $overSpeed < 20)
        echo "speeding";
    elseif ($overSpeed > 20 && $overSpeed < 40)
        echo "excessive speeding";
    elseif ($overSpeed > 40)
        echo "reckless driving";
    else
        echo "";
}

function getLimit(string $zone): int
{
    switch ($zone) {
        case "motorway":
            $speedLimit = 130;
            break;
        case "interstate":
            $speedLimit = 90;
            break;
        case "city":
            $speedLimit = 50;
            break;
        case "residential":
            $speedLimit = 20;
            break;
        default:
            echo "Not a Valid Input";
            $speedLimit = 1000;
    }
    return $speedLimit;
}