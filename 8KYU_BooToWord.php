<?php
function boolToWord($bool)
{
    if (!$bool) {
        return "No";
    } else {
        return "Yes";
    }
}

print boolToWord(true);