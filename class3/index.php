<?php
// $x = 20;
// $y = 10;
// var_dump($x == 20);
// var_dump($x != $y);
// var_dump($x == $y);
// var_dump($x > $y);
// var_dump($x < $y);
// var_dump($x++); # $x++ means echo $x then $x+1
// var_dump(++$y); # ++$x means do $x+1 then echo $x
// $x = 20;
// $y = 10;
// var_dump($x--); # $x-- means echo $x then $x-1
// var_dump(--$y); # --$x means do $x-1 then echo $x

// $a = 30;
// $b = "30";
// var_dump($a <= $b);
// var_dump($a >= $b);
// var_dump($a == $b);
// var_dump($a === $b);

// $a = 50;
// $b = "50";
// var_dump($a == 50 || $b == 20); #true || false = true
// var_dump($a == 30 || $b == 20); #false || false = false
// var_dump($a == 50 or $b == 20);

// var_dump($a == 50 && $b == 50); #true && true = true
// var_dump($a == 50 && $b == 54); #true && false = false
// var_dump($a == 50 and $b == 50);

// //operator presidency
// $a = true && false;
// $b = true and false;
// var_dump($a);
// var_dump($b);

// $x = false || true;
// $y = false or true;
// var_dump($x);
// var_dump($y);

// $a = 10 * 6 % 4;
// var_dump($a);
// $a = 10 * (6 % 4);
// var_dump($a);

// $name = "Baktear Ali";
// $age = 21;
// $country = "Bangladesh";

// echo "My name is $name. I'm $age years old, I'm from $country. \n\n";

// echo 'My name is '.$name.'. I am '.$age.' years old. I am from '.$country.'.'."\n\n";

// printf("My name is %s. I'm %d years old. I'm from %s \n\n",$name, $age, $country);

// //if
// if(true){
//     echo "OK";
// }
// else{
//     echo "Not Ok";
// }

// echo "\n\n";

// //elseif
// if(false){
//     echo "OK";
// }
// elseif(true){
//     echo "It's Ok";
// }
// else{
//     echo "Not Ok";
// }

// echo "\n\n";

// //else
// if(false){
//     echo "OK";
// }
// else{
//     echo "Not Ok";
// }

// echo "\n\n";

// //Home work-1
// //Create a program for echo the largest number out of three digits.
// $a = 10;
// $b = 40;
// $c = 20;

// if($a>$b && $a>$c){
//     printf ("%d is the biggest number!",$a);
// }
// elseif($b>$a && $b>$c){
//     printf ("%d is the biggest number!",$b);
// }
// else{
//     printf ("%d is the biggest number!",$c);
// }

// echo "\n\n";

//Home work-2
//Create a program to detect if a number is Odd or Even
$x = 20;
if($x % 2 == 0){
    printf("%d is an Even number!",$x);
}
else{
    printf("%d is an Odd number!",$x); 
}

?>