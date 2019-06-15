<?php

$input=explode(" ",readline());
foreach ($input as &$num){
    echo $num;
    $num= round($num , 0 ,PHP_ROUND_HALF_UP);
    echo " => $num\n";
}