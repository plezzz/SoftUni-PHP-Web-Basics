<?php

$input=explode(", ",readline());
$towns=[];
for($i=0;$i<count($input);$i+=2){
if (!key_exists($input[$i],$towns))
    $towns[$input[$i]]=$input[$i+1];
else
    $towns[$input[$i]]+=$input[$i+1];
}

foreach ($towns as $town=>$count){
    echo "$town => $count\n";
}