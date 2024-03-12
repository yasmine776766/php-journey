<?php
function filter($string_to_filter) {
    $numbers = [];
    $counter = 0;

    for ($i = 0; $i < strlen($string_to_filter); $i++) {
        $char = $string_to_filter[$i];
        if (is_numeric($char)) {
            array_push($numbers, intval($char));
            $counter++;
        }
    }

    // Bubble sort to sort the numbers
    for ($i = 0; $i < $counter; $i++) {
        for ($j = 0; $j < $counter - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    return $numbers;
}

print_r(filter("js7sh6nkao1jd2"));

