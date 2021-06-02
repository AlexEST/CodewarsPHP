<?php
function highAndLow($numbers)
{
    $arr = explode(" ", $numbers);
    $retArr = [];
    foreach ($arr as $item) {
        array_push( $retArr, intval($item));
    }
    return max($retArr)." ".min($retArr);
}

print_r(highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));