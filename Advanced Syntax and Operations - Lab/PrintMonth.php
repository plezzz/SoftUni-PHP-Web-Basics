<?php

$mounts = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$mount = readline() - 1;

if (key_exists($mount, $mounts))
    echo $mounts[$mount];
else
    echo "Invalid Month!";