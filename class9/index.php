<?php
// $str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet congue elementum.';

// $hexStr = bin2hex($str);
// echo $hexStr;
// echo "\n\n";

// $binStr = hex2bin($hexStr);
// echo $binStr;
// echo "\n\n";

// echo $str[0];
// echo "\n\n";

// $exStr = explode(' ', $str);
// print_r($exStr);
// echo ($exStr[0]);
// echo "\n\n";

// $joinStr = implode('-', $exStr);
// echo $joinStr;
// echo "\n\n";
// $joinStr = join(',', $exStr);
// echo $joinStr;
// echo "\n\n";

#password incripet
// $password = "123456";
// echo md5($password);
// echo sha1($password);
// echo "\n";
// echo password_hash($password, PASSWORD_BCRYPT);
//echo "\n";

// $scriptStr = "<script>alert'ok'</script>";
// echo $scriptStr;
// echo "\n";
// $enStr = htmlentities($scriptStr);
// echo $enStr;
// echo "\n";
// echo html_entity_decode($enStr);
// echo "\n";

// #remove left right space
// $str = " Baktear Ali ";
// echo trim($str);
// echo "\n";
// $str = "Baktear Ali";
// echo strlen($str);
// echo "\n";
// echo str_word_count($str);
// echo "\n";
// echo strrev($str);
// echo "\n";
// echo str_repeat($str, 5);
// echo "\n";

// $str = "Baktear Mia Baktear Mia Baktear Mia";
// echo str_replace('Mia', 'Ali', $str, $count);
// echo "\n";
// echo $count;
// echo "\n";

// $arr = [
//     'a',
//     'b',
//     'c',
//     'd'
// ];
// $arrSrlze = serialize($arr);
// echo $arrSrlze;
// echo "\n";
// print_r(unserialize($arrSrlze));
// echo "\n";
// $jenarr = json_encode($arr);
// echo $jenarr;
// echo "\n";
// print_r(json_decode($jenarr));
// echo "\n";

$str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet congue elementum.';
$substr = substr($str, 0, 27);
echo $substr;
echo "\n";