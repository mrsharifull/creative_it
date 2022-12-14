<?php
$str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet congue elementum.';

$hexStr = bin2hex($str);
echo $hexStr;
echo "\n\n";

$binStr = hex2bin($hexStr);
echo $binStr;
echo "\n\n";

echo $str[0];
echo "\n\n";

$exStr = explode(' ', $str);
print_r($exStr);
echo ($exStr[0]);
echo "\n\n";

$joinStr = implode('-', $exStr);
echo $joinStr;
echo "\n\n";
$joinStr = join(',', $exStr);
echo $joinStr;
echo "\n\n";

#password encripet
$password = "123456";
echo md5($password);
echo sha1($password);
echo "\n";
echo password_hash($password, PASSWORD_BCRYPT);
echo "\n";

$scriptStr = "<script>alert'ok'</script>";
echo $scriptStr;
echo "\n";
$enStr = htmlentities($scriptStr);
echo $enStr;
echo "\n";
echo html_entity_decode($enStr);
echo "\n";

#remove left right space
$str = " Baktear Ali ";
echo trim($str);
echo "\n";
$str = "Baktear Ali";
echo strlen($str);
echo "\n";
echo str_word_count($str);
echo "\n";
echo strrev($str);
echo "\n";
echo str_repeat($str, 5);
echo "\n";

$str = "Baktear Mia Baktear Mia Baktear Mia";
echo str_replace('Mia', 'Ali', $str, $count);
echo "\n";
echo $count;
echo "\n";

$arr = [
    'a',
    'b',
    'c',
    'd'
];
$arrSrlze = serialize($arr);
echo $arrSrlze;
echo "\n";
print_r(unserialize($arrSrlze));
echo "\n";
$jenarr = json_encode($arr);
echo $jenarr;
echo "\n";
print_r(json_decode($jenarr));
echo "\n";

$str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet congue elementum.';
$substr = substr($str, 0, 27);
echo $substr;
echo "\n";

#heredoc syntax
$name = <<<EOD
    Baktear
        Ali
            Baktear
EOD;
echo $name;
echo "\n";

#FIle functions
// $filePath = '\\european_it\\XAMPP\\htdocs\\creative_it\\class9';
$filePath = '/european_it/XAMPP/htdocs/creative_it/class9/demo.txt';
$fp = fopen($filePath, 'r');

$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
echo file_get_contents($filePath);
echo "\n";
$file = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
print_r($file);
fclose($fp);

#home work-1 string reverse without strrev function.
$str = 'Hellow world';
$i = strlen($str) - 1;
for ($i; $i >= 0; $i--) {
    echo $str[$i];
}