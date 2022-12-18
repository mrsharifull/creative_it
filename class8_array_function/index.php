<?php

# ('&') definition copy by reference/memory address copy by value
#================================================================
$a = 10;
// $b = $a;
$b = &$a;
$b = 20;
echo $a;

#array sort function
#========================
$array = [20,50,30,90,60,40,80,70,10,50];
sort($array);
sort($array, SORT_REGULAR);
sort($array, SORT_NUMERIC);
sort($array, SORT_NATURAL);
print_r ($array);
echo "\n\n";

$array = ["class",20,"roll",50,"year",30,"name",90,60,"reg",40,80,70,10,50];
sort($array, SORT_STRING);
sort($array, SORT_LOCALE_STRING );
sort($array, SORT_NATURAL);
sort($array, SORT_FLAG_CASE);
print_r ($array);
echo "\n\n";

#array_change_key_case function
#==============================
$input_array = ["Shariful"=>1,"FIROJ"=>2,"Al-Amin"=>3,"JOY"=>4,"raton"=>5];
$array = array_change_key_case($input_array, CASE_UPPER);
print_r($array);
$array = array_change_key_case($input_array, CASE_LOWER);
print_r($array);
echo "\n\n";

#array_chunk function
#==============================
$array = [20,50,30,90,60,40,80,70,10,50];
sort($array);
// $newArr = array_chunk($array, 3);
$newArr = array_chunk($array, 3, true);
print_r($newArr);
echo "\n\n";

#array_count_values function (count common value from array)
#===========================================================
$array = [20,50,30,20,50,10,90,60,40,80,70,10,50];
$newArr = array_count_values($array);
sort($newArr);
print_r($newArr);
echo "\n\n";

#array_diff function (count different value from array)
#==============================================================
$array1 = [20,50,30,20,50,100];
$array2 = [20,50,30,20,50,200];
$array3 = [20,50,30,20,50,300,400];
$diffArr = array_diff($array1, $array2);
print_r($diffArr);
$diffArr = array_diff($array2, $array1);
print_r($diffArr);
$diffArr = array_diff($array3, $array1, $array2);
print_r($diffArr);
$assArray1 = ["Shariful"=>20,"Firoj"=>50,"Raton"=>70,10];
$assArray2 = ["Shariful"=>20,"Firoj"=>50,10];
$diffAssArr = array_diff_assoc($assArray1, $assArray2);
print_r($diffAssArr);
$assArray1 = [0=>"Shariful",1=>"Firoj",2=>"Raton","Al-Amin"];
$assArray2 = [0=>"Shariful",1=>"Firoj","Al-Amin"];
$diffAssArr = array_diff_assoc($assArray1, $assArray2);
print_r($diffAssArr);
echo "\n\n";

#array_keys function (show array key on another array)
#=====================================================
$assArray1 = ["Shariful"=>20,"Firoj"=>50,"Raton"=>70,"Al-Amin"=>10];
$keyArr = array_keys($assArray1);
print_r($keyArr);
echo "\n\n";

#array_marge function (merge all array in one new array)
#=======================================================
$array1 = [20,50,30,20,50,100];
$array2 = [20,50,30,20,50,200];
$array3 = [20,50,30,20,50,300,400];
$mergeArr = array_merge($array1,$array2,$array3);
print_r($mergeArr);
echo "\n\n";

#array_pad function
#===================
$array1 = [20,50,30,20,50,100];
$padArr = array_pad($array1,10,0);
print_r($padArr);
$padArr = array_pad($array1,10,"SM");
print_r($padArr);
$padArr = array_pad($array1,7,[10,20,30]);
print_r($padArr);
echo "\n\n";

#array_shift function (remove the first value from array and show this first value)
#====================================================================================
$array1 = [20,50,30,20,50,100];
$shiftArr = array_shift($array1);
print_r($array1); #remove first value from array
echo $shiftArr; #show this first value
echo "\n\n";

#array_unshift function
#=======================
$array1 = [20,50,30,20,50,100];
$shiftArr = array_unshift($array1,500);
#sort($array1);
print_r($array1); 
echo $shiftArr;
echo "\n\n";

#array_pop function (remove the last value from array and show this last value)
#====================================================================================
$array1 = [20,50,30,20,50,100];
$popArr = array_pop($array1);
print_r($array1); #remove last value from array
echo $popArr; #show this last value
echo "\n\n";

#array_push function 
#==================
$array1 = [20,50,30,20,50,100];
$pushArr = array_push($array1,10);
print_r($array1); #add this 10 value on this array
echo $pushArr; #show here add value index
echo "\n\n";

#array_rand function 
#==================
$array1 = [20,50,30,20,50,100];
$pushArr = array_rand($array1);
#echo $pushArr; #randomly show different index from this array by refresh 
echo $array1[$pushArr]; #randomly show different value from this array by refresh
echo "\n\n";
#make a ludo chokka by array_rand function 
#=========================================
$array1 = [1,2,3,4,5,6];
$pushArr = array_rand($array1);
echo $array1[$pushArr];
echo "\n\n";

#array_replace function
#======================
$array1 = [20,50,30,20,50,100];
$array2 = [200,500,300,200,500,1000];
$array3 = [2000,5000,3000,2000,5000,10000];
$replaceArr = array_replace($array1,$array2);
print_r($replaceArr);
$replaceArr = array_replace($array1,$array3);
print_r($replaceArr);
echo "\n\n";

#array_search function
#======================
$array1 = [20,50,30,20,50,100];
$searchArr = array_search(50,$array1);
echo $searchArr;
echo "\n\n";

#array_sum function
#======================
$array1 = [20,50,30,20,50,100];
$sumArr = array_sum($array1);
echo $sumArr;
echo "\n\n";

#array_slice function
#======================
$array1 = [20,50,30,20,50,100];
$sumArr = array_slice($array1,2);
print_r($sumArr);
$sumArr = array_slice($array1,2,3);
print_r($sumArr);
$sumArr = array_slice($array1,2,3,true);#show original key
print_r($sumArr);
$sumArr = array_slice($array1,-2);
print_r($sumArr);
$sumArr = array_slice($array1,-4,-1);
print_r($sumArr);
$sumArr = array_slice($array1,-5,3,true);#show original key
print_r($sumArr);
echo "\n\n";

#in_array function
#======================
$array1 = [20,50,30,20,50,100];
$Arr = in_array(100,$array1);
print_r($Arr);
echo "\n";
var_dump($Arr);
echo "\n\n";
$Arr = in_array(1000,$array1);
print_r($Arr);
var_dump($Arr);
echo "\n\n";





?>