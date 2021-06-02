<?php
function abbrevName($name)
{
    $arr = explode(" ", $name);
    return strtoupper(substr($arr[0], 0, 1)) . "." . strtoupper(substr($arr[1], 0, 1));
}

print abbrevName("Sam Harris");
