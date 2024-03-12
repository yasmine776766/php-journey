<?php

function convert($decimal){
    $binary_digits = "";
    while ($decimal > 0){
        $remainder = $decimal % 2;
        $binary_digits = $remainder . $binary_digits;
        $decimal = (int)($decimal / 2);
    }
    return $binary_digits;
}

echo convert(20);
