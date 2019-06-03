

$input = explode(", ", readline());

for ($i = 0; $i < count($input); $i += 3) {
    list($x, $y, $z) = [$input[$i], $input[$i + 1], $input[$i + 2]];
    if (isVolume($x, $y, $z))
        echo "inside\n";
    else
        echo "outside\n";
}

function isVolume($x, $y, $z): bool
{
    list($x1, $y1, $z1, $x2, $y2, $z2) = [10, 20, 15, 50, 80, 50];

    if ($x >= $x1 && $x <= $x2) {
        if ($y >= $y1 && $y <= $y2) {
            if ($z >= $z1 && $z <= $z2) {
                return true;
            }
        }
    }

    return false;
}