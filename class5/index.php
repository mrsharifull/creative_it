<?php
//star print

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k < $i + $j; $k++) {
        echo "*";
    }
    for ($l = 5; $l > $i; $l--) {
        echo " ";
    }
    echo "\n";
}

echo "\n";
echo "\n";

for ($i = 1; $i <= 5; $i++) {
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    for ($j = 5; $j > $i; $j--) {
        echo " ";
    }
    echo "\n";
}

echo "\n";
echo "\n";

for ($i = 1; $i <= 5; $i++) {

    for ($j = 5; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "\n";
}


echo "\n";
echo "\n";

for ($i = 1; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        echo "*";
    }
    for ($j = 1; $j < $i; $j++) {
        echo " ";
    }
    echo "\n";
}

echo "\n";
echo "\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo " ";
    }
    for ($k = 5; $k >= $i; $k--) {
        echo "*";
    }

    echo "\n";
}

echo "\n";
echo "\n";

for ($i = 1; $i <= 5; $i++) {
    if ($i == 1 || $i == 5) {
        for ($j = 1; $j <= 5; $j++) {
            echo "*";
        }
    } else {
        for ($k = 1; $k <= 1; $k++) {
            echo "*";
        }
        for ($l = 1; $l <= 3; $l++) {
            echo " ";
        }
        for ($m = 1; $m <= 1; $m++) {
            echo "*";
        }
    }
    echo "\n";
}


echo "\n";
echo "\n";

for ($i = 1; $i <= 5; $i++) {
    if ($i == 1 || $i == 5) {
        for ($j = 1; $j <= 5; $j++) {
            echo "*" . " ";
        }
    } else {
        for ($k = 1; $k <= 1; $k++) {
            echo "*";
        }
        for ($l = 1; $l <= 7; $l++) {
            echo " ";
        }
        for ($m = 1; $m <= 1; $m++) {
            echo "*";
        }
    }
    echo " \n";
}
echo " \n\n";

//Fibonacci series
echo "//Fibonacci series \n\n";

$a = 1;
$b = 0;

for ($i = 0; $i <= 10; $i++) {
    echo "$b,";
    $sum = $a + $b;
    $a = $b;
    $b = $sum;
}

echo "\n";

$a = 1;
$b = 0;
$x = 0;
for ($i = 0; $i <= 10; $i++) {
    echo "$b,";
    $b = $b + $a;
    $a = $x;
    $x = $b;
}
echo "\n\n";



//Factorial

echo "//Factorial\n\n";

$number =  5;
$multi = 1;
for ($i = $number; $i > 0; $i--) {
    $multi = $multi * $i;
}
echo $multi;


echo "\n\n";



#namota
echo "#namota\n\n";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo $i . ' x ' . $j . ' = ' . $result . "\n";
    }
    echo "\n";
}

// while loop
echo "// while loop\n\n";
$i = 1;
$sum = 0;
while ($i <= 10) {
    $sum = $sum + $i;
    $i++;
}
echo $sum;

echo "\n\n";

// Foreach loop
echo "// Foreach loop\n\n";
$a = [1, 2, 3, 4, 5, 10];
$sum = 0;
foreach ($a as $value) {
    $sum = $sum + $value;
}
echo $sum;