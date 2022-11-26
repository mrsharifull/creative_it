<?php
// $username = "baktear";
// $password = "abc123";

// # if else
// if($username == "baktear" && $password == "abc123"){
//     echo "Login";
// }
// else{
//     echo "Invalid user";
// }
// echo "\n";
// echo "\n";

// # Nested if
// if($username == "baktear"){
//     if($password == "abc1234"){
//         echo "Login";
//     }
//     else{
//         echo "Invalid Password";
//     }
// }
// else{
//     echo "Invalid Username";
// }

// #if else shorthand by ternary operator
// $username = "baktear";
// $password = "abc123";
// echo $username == "baktear" && $password == "abc123"? "Login" : "Invalid User";
// echo "\n";

// #Null closing operator
// $name = "Md Baktear Ali";
// echo $name ?? "Name Not Found";
// echo "\n";

// #switch case
// $color ="green";
// switch($color){
//     case "red" :
//         echo "Color Red";
//         break;
    
//     case "blue" :
//         echo "Color Blue";
//         break;

//     case "green" :
//         echo "Color Green";
//         break;
    
//     default:
//         echo "Color Not Found";
    
//     }


// #Using switch case determine if an alphabet vowel or consonant
// $alphabet ="u";
// switch($alphabet){
//     case "a" :
//         echo "$alphabet is a vowel letter";
//         break;
    
//     case "e" :
//         echo "$alphabet is a vowel letter";
//         break;

//     case "i" :
//         echo "$alphabet is a vowel letter";
//         break;

//     case "o" :
//         echo "$alphabet is a vowel letter";
//         break;

//     case "u" :
//         echo "$alphabet is a vowel letter";
//         break;
    
//     default:
//         echo "$alphabet is a consonant letter";
    
//     }

// #Create a program for echo the largest number out of three digits.
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

// #Create a program by if else to detect if a number is Odd or Even
// $x = 20;
// if($x % 2 == 0){
//     printf("%d is an Even number!",$x);
// }
// else{
//     printf("%d is an Odd number!",$x); 
// }
// echo "\n";
// echo "\n";

// #Create a program by for loop to detect if a number is Odd or Even
// for($i=1; $i<=10; $i++){
//     if($i%2 == 0){
//         echo "$i is an even number! \n";
//     }
//     else{
//         echo "$i is an odd number! \n";
//     }
// }

// #Leap Year
// $year = 2022;

// if($year % 4 == 0){
//     echo "$year is a Leap Year";
// }
// else{
//     echo "$year is not a Leap Year";
// }
// echo "\n";
// echo "\n";

#program for marksheet
$mark = 75;

if($mark>=80 && $mark <= 100){
    echo "Grade: (A+)";
}
else if($mark>=70 && $mark <= 79){
    echo "Grade: (A)";
}
else if($mark>=60 && $mark <= 69){
    echo "Grade: (A-)";
}
else if($mark>=50 && $mark <= 59){
    echo "Grade: (B)";
}
else if($mark>=40 && $mark <= 49){
    echo "Grade: (C)";
}
else if($mark>=33 && $mark <= 39){
    echo "Grade: (D)";
}
else if($mark>=0 && $mark <= 32){
    echo "Grade: (F)";
}
else{
    echo "Invalid Mark";
}

?>