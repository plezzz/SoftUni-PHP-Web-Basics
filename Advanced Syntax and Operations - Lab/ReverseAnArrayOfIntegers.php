<?php

$row=readline();
$numbers=[];
for($i=1;$i<=$row;$i++){
$numbers[]=readline();
}
$numbers=array_reverse($numbers);
echo implode(" ", $numbers);