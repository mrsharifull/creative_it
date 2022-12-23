<?php

#problem-1
function indexNumber($array, $targetInd)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            $SumKey1 = $i;
            $SumKey2 = $j++;
            $arrInSum = $array[$SumKey1] + $array[$SumKey2];
            if ($arrInSum == $targetInd) {
                $output = [$SumKey2, $SumKey1];
                print_r($output);
            }
        }
    }
}

$nums = [2, 7, 11, 15];
$target = 17;
indexNumber($nums, $target);

#problem-2
function position($arr, $value)
{
    $output = array_search($value, $arr);
    if ($output >= 0 && !empty($output)) {
        echo $output;
    } else {
        array_push($arr, $value);
        sort($arr);
        $output = array_search($value, $arr);
        echo $output;
    }
}

$numbers = [1, 2, 3, 5, 7, 11, 15];
$target = 4;
position($numbers, $target);

echo "\n";

#problem-2
function targetIndex($arr, $value)
{
    if (array_search($value, $arr) == true) {
        echo array_search($value, $arr);
    } else {
        array_push($arr, $value);
        sort($arr);
        echo array_search($value, $arr);
    }
}

$numbers = [1, 2, 3, 5, 7, 11, 15];
$targetValue = 4;
targetIndex($numbers, $targetValue);