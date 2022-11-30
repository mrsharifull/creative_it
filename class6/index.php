<?php
// //Factorial
// echo "//Factorial\n\n";



// function Factorial($num, $end)
// {
//     $multi = 1;
//     if ($num > $end) {
//         return;
//     } else {
//         $multi = $multi * $num;
//         $num++;
//         Factorial($num, $end);
//     }
//     echo ($multi);
// }
// $num = 1;
// $end = 4;
// Factorial($num, $end);

// echo "\n";


// //Fibonacci
// echo "//Fibonacci\n\n";

// function Fibonacci($number, $end)
// {
//     if ($number > $end) {
//         return;
//     } elseif ($number == 0) {
//         echo 0;
//     } else if ($number == 1) {
//         echo 1;
//     } else {
//         echo (Fibonacci($number - 1) +
//             Fibonacci($number - 2));
//     }

//     $number++;
//     Fibonacci($number, $end);
// }

// $number = 0;
// $end = 10;
// echo Fibonacci($number, $end);

// echo "\n";


// //prime_num
echo "//prime_num\n\n";
function prime_num($num)
{
    if ($num == 1)
        return 0;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0)
            return 0;
    }
    return 1;
}
$num = 9;
$flag_val = prime_num($num);
if ($flag_val == 1)
    echo "$num It is a prime number";
else
    echo "$num It is a non-prime number";

echo "\n\n";


//Factorial
echo "//Factorial\n\n";

$num = 7;
function Factorial($num)
{
    $multi = 1;
    for ($num; $num > 0; $num--) {
        $multi = $multi * $num;
    }
    return $multi;
}
echo Factorial($num);

echo "\n\n";

//Fibonacci
echo "//Fibonacci\n\n";
function Fibonacci($number)
{
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (Fibonacci($number - 1) +
            Fibonacci($number - 2));
}

$fib = 13;
for ($number = 0; $number <= $fib; $number++) {
    echo Fibonacci($number), ',';
}
echo "\n";