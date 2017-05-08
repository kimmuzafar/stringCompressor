<?php

function compress($str)
{
    $charArray = str_split($str);

    $previous = "";
    $result = array();
    $count = 1;

    foreach($charArray as $char)
    {
        if($char == $previous){
            $count++;
            $result[$char] = $count;
        }else{
            $result[$char] = 1;
            $count = 1;
        }

        $previous = $char;
    }

    $finalStr = "";

    foreach($result as $key=>$value)
    {
        if($value == 1){
            $finalStr .= $key;
        }else{
            $finalStr .= $key.$value;
        }
    }

    return $finalStr;
}

echo compress("aaaaabbbbbbbbbccccpqrstuv"); // a5b9c4pqrstuv