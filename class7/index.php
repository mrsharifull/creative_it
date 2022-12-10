<?php

// #Array
// echo "#Array \n\n";
// $a = ['Md Baktear Ali', 21, 'Bangladesh', true];

// // var_dump($a);
// // print_r($a);

// print_r("My name is " . $a[0] . ". I'm " . $a[1] . " years old. I'm from " . $a[2] . ".\n\n");

// #Array
// echo "#Array \n\n";
// $number = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

// for ($i = 0; $i < count($number); $i++) {
//     echo $number[$i] . ", ";
// }
// echo "\n\n";

// foreach ($number as $data) {
//     echo $data . ", ";
// }
// echo "\n\n";

// #Associative Array
// echo "#Associative Array \n\n";
// $aarr =
//     [
//         'Name' => 'Md Baktear Ali.',
//         'Age' => 21,
//         'Country' => 'Bangladesh.',
//         'Religion' => 'Islam.'

//     ];
// echo $aarr['Name'] . "\n\n";

// foreach ($aarr as $key => $data) {
//     echo $key . " = " . $data . "\n";
// }
// echo $aarr['Name'] . "\n\n";

// #2Daymentional Array / Multi Daymentional Array
// echo "#2Daymentional Array / Multi Daymentional Array \n\n";
// $mdarr =
//     [
//         [10, 20, 30, 40, 50],
//         [60, 70, 80, 90, 100],
//         [200, 300, 400, 500, 600],
//         [200, 300, 400, 500, 600]

//     ];
// echo $mdarr[2][4] . "\n\n"; #echo 600 from mdarr array

// foreach ($mdarr as $data) {
//     foreach ($data as $sdata) {
//         echo $sdata . ", ";
//     }
// }
// echo "\n\n";

// #3Daymentional Array / Multi Daymentional Array
// echo "#3Daymentional Array / Multi Daymentional Array \n\n";
// $md3arr =
//     [
//         [
//             [1, 2, 3, 4, 5],
//             [60, 70, 80, 90, 100]
//         ],
//         [
//             [200, 300, 400, 500, 600],
//             [2000, 3000, 4000, 5000, 6000]
//         ]


//     ];
// foreach ($md3arr as $data) {
//     foreach ($data as $sdata) {
//         foreach ($sdata as $thdata) {
//             echo $thdata . ", ";
//         }
//     }
// }
// echo "\n\n";

// #2Daymentional Associative Array / Multi Daymentional Associative Array
// echo "#2Daymentional Associative Array / Multi Daymentional Associative Array \n\n";
// $mdaarr =
//     [
//         [
//             'Name' => 'Md Baktear Ali.',
//             'Age' => 21,
//         ],
//         [
//             'Country' => 'Bangladesh.',
//             'Religion' => 'Islam.'
//         ]
//     ];
// foreach ($mdaarr as $key1 => $data) {
//     foreach ($data as $key2 => $sdata) {
//         echo "[" . $key1 . "-" . $key2 . "] = " . $sdata . "\n";
//     }
// }
// echo "\n\n";

// #Special Array Home Work-1
// echo "#Special Array Home Work-1 \n\n";
// $sarr = [
//     10,
//     20,
//     [100, 400, 500],
//     40,
//     50,
//     [50, 70, 80]
// ];
// foreach ($sarr as $key => $data) {
//     if (is_array($data)) {
//         foreach ($data as $key1 => $sdata) {
//             echo $key . "-" . $key1 . " = " . $sdata . "\n";
//         }
//     } else {
//         echo $key . " = " . $data . "\n";
//     }
// }
// echo "\n\n";

#Find Even & Odd Number From Array 1-100. Home Work-2
echo "#Find Even & Odd Number From Array 1-100. Home Work-2 \n\n";
$array = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100
];

foreach ($array as $number) {
    if ($number % 2 == 0) {
        echo $number . " is an Even Number.\n";
    } else {
        echo $number . " is an Odd Number.\n";
    }
}