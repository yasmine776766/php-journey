<?php
function merge_sort($arr) {
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }

    $mid = (int) ($length / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = merge_sort($left);
    $right = merge_sort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $leftIndex = 0;
    $rightIndex = 0;

    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }

    while ($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }

    while ($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $result;
}


