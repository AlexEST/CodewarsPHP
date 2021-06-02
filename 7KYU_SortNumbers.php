<?php
function solution($nums) {
    sort($nums);
    return $nums;
}

print_r (solution([2,3,1,5,4]));