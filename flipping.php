<?php
function flip($number){
    $flipped_number = "";
    $number = (string) $number;
    for ($i =0; $i <strlen($number); $i++ ){
        $flipped_number = $number[$i] . $flipped_number;    
    }
return (int)$flipped_number;


}

echo flip(345);