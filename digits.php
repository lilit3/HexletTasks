<?php


function addDigits($num)
{
    $numbers = (string)$num;
    $res = 0;

        $len = strlen($numbers);
        
        for ($i = 0; $i < $len; $i++) {
            $res += $numbers[$i];
    
        }
        
        if ($res > 10) {

            $res = addDigits($res);
        }

    return $res;
}

echo addDigits(38);