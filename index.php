<?php
// Part 1 : Search for how to make \n work in browser.
// echo "If you view the page source \r\n you will find a newline in this string.";
// echo "<br>";
echo nl2br("You will find the \n newlines in this string \n on the browser window.");
// ************************
// Part 2 : Search for 3 built-in function of a string.
// 1.  `addcslashes()` Returns a string with backslashes in front of the specified characters.
$str1 = addcslashes("Hello World!","W");

echo nl2br("\n". $str1."\n"); // Hello \World!
// 2. `addslashes()`	Returns a string with backslashes in front of predefined characters.
$str2 = addslashes('What does "yolo" mean?');
echo nl2br("\n".$str2."\n"); // What does \"yolo\" mean?

// 3. `bin2hex()`	Converts a string of ASCII characters to hexadecimal values.
$str3 = bin2hex("Hello World!");
echo nl2br("\n".$str3."\n"); // 48656c6c6f20576f726c6421

// 4. `chop()`	Removes whitespace or other characters from the right end of a string.
$str4 = "Hello World!";
echo $str4 . "<br>";// Hello World!
echo chop($str4,"World!")."<br>"; // Hello

// 5. `chr()`	Returns a character from a specified ASCII value
echo chr(52) . "<br>"; // Decimal value //4
echo chr(052) . "<br>"; // Octal value // *
echo chr(0x52) . "<br>"; // Hex value //R

//***********************

// Part 3: Write a PHP script to get the sum and avg of an indexed array
//  1. with value = 45 in index =1
//  2. with value = 12 in index =0
//  3. with value = 25 in index =3
//  4. with value = 10 in index =2
//  after that sort it in a reverse order (highest to lowest).
$arr=[];
$arr[0]=12;
$arr[1]=45;
$arr[2]=10;
$arr[3]=25;
echo "Array with no sort <br>";
print_r($arr);// Array ( [0] => 12 [1] => 45 [2] => 10 [3] => 25 )

$newSortingArray = array_reverse($arr,true);
echo "<br> Array with reverse order <br>";
print_r($newSortingArray);// Array ( [3] => 25 [2] => 10 [1] => 45 [0] => 12 )

echo "<br><br> Sum of indexed <br> ";
print_r(array_sum($arr));//92

echo "<br><br>Avg of indexed <br>";
$average= array_sum($arr)/count($arr);
print_r($average); // 23
//**************************
// Part 4: Write a PHP script to sort the following associative array :
//  array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) in
//  1. ascending order sort by value
//  2. ascending order sort by Key
//  3. descending order sorting by Value
//  4. descending order sorting by Key  
$arrPart4 = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

//  1. ascending order sort by value
echo "<br><br> sort in ascending order<br>";
asort($arrPart4);
print_r($arrPart4);// Array ( [Sara] => 31 [Walaa] => 39 [Ramy] => 40 [John] => 41 )

// 2. ascending order sort by Key
echo "<br><br> sort in ascending order by key <br>";
ksort($arrPart4);
print_r($arrPart4);// Array ( [John] => 41 [Ramy] => 40 [Sara] => 31 [Walaa] => 39 )

// 3. descending order sorting by Value
echo "<br><br>descending order sorting by Value<br>";
arsort($arrPart4);
print_r($arrPart4);// Array ( [John] => 41 [Ramy] => 40 [Walaa] => 39 [Sara] => 31 )

// 4. descending order sorting by Key  
echo "<br><br> descending order sorting by key<br>";
krsort($arrPart4);
print_r($arrPart4);// Array ( [Walaa] => 39 [Sara] => 31 [Ramy] => 40 [John] => 41 )
?>