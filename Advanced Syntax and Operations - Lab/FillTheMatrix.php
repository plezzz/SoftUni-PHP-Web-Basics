<?php

list($n, $command)=explode(", ",readline());
$matrix=[];
$num=1;
switch ($command){
    case "A":
        for($i=0;$i<$n;$i++){
            $matrix[$i][]=$i+1;
            for($j=0;$j<$n-1;$j++){
                $matrix[$i][]=$matrix[$i][$j]+$n;
            }
        }
        break;
    case "B":
        for ($i = 0; $i < $n; $i++) {
            if ($i % 2 == 0) {
                for ($j = 0; $j < $n; $j++) {
                    $matrix[$j][$i] = $num;
                    $num++;
                }
            } else {
                for ($j = $n - 1; $j >= 0; $j--) {
                    $matrix[$j][$i] = $num;
                    $num++;
                }
            }
        }
        break;
}

foreach ($matrix as $rows){
    echo implode(" ",$rows).PHP_EOL;
}