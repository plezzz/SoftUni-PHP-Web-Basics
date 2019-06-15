<?php

$input = explode(', ', readline());
$elements = [];

for($i=0;$i<count($input);$i++){
    if (!key_exists($input[$i], $elements))
        $elements[$input[$i]] = 1;
    else
        $elements[$input[$i]]++;
}
foreach ($elements as $element => $count) {
    if ($count==1)
    echo "$element ";
}