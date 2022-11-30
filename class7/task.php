<?php

$arr = [
    10,
    20,
    [100, 400, 500],
    40,
    50,
    [50, 70, 80]
];

foreach ($arr as $key1 => $data) {
    if (is_array($data)) {
        foreach ($data as $key2 => $s_data) {
            echo $key1 . '-' . $key2 . ' = ' . $s_data . "\n";
        }
    } else {
        echo $key1 . ' = ' . $data . "\n";
    }
}