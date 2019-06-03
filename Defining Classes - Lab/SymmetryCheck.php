<?php

$input = readline();
echo isPalindrome($input);

function isPalindrome(string $input): string
{
    $ans = "true";
    $reverse = strrev($input);
    for ($i = 0; $i < strlen($input); $i++) {
        if ($input[$i] !== $reverse[$i]) {
            $ans = "false";
            break;
        }
    }
    return $ans;
}