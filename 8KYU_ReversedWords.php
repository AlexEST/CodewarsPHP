<?php
function reverseWords($str)
{
    $arr = explode(" ", $str);
    $str = "";
    for ($i=count($arr)-1; $i > -1; $i--) {
        $str .= $arr[$i] . " ";
    }
    $str = trim($str);
    return $str; // reverse those words
}

print reverseWords("world! hello");