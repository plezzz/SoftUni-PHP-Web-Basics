<?php

$nums=array_map("intval",explode(" ",readline()));

while (count($nums)>1){
    $newNums=[];
    for($i=0;$i<count($nums)-1;$i++){
        $newNums[]=$nums[$i]+$nums[$i+1];
    }
    $nums=$newNums;
}
echo implode(" ",$nums);