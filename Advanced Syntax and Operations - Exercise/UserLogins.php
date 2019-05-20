<?php

$users=[];
while (true){
    $input = readline();
    if ($input == "login")
        break;
    list($user, $pass) = explode(" -> ", $input);

    $users[$user]=$pass;
}
$counter=0;
while (true) {
    $input = readline();
    if ($input == "end")
        break;
    list($user, $pass) = explode(" -> ", $input);

    if (key_exists($user,$users)){
        if ($users[$user]==$pass)
            echo "$user: logged in successfully\n";
        else {
            echo "$user: login failed\n";
            $counter++;
        }
    }else {
        echo "$user: login failed\n";
        $counter++;
    }
}
echo "unsuccessful login attempts: $counter";