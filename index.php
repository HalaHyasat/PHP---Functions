<?php
//Question number 1
function factorial($n){
if($n == 0) {
return 1; }
else { return $n * factorial($n-1); }
}
echo "Q(1): <br>".(factorial(3))."<br>";

//Question number 2
function prime($n)
{
for($x=2; $x < $n; $x++) {
if($n % $x == 0) {
return 0;}
}
return 1;
}
$a = prime(6);
if ($a == 0)
echo "Q(2): <br>It isn't a prime number <br>";
else
echo "Q(2): <br>It is a prime number <br>";

//Question number 3
function reverse ($str)
{return strrev($str);}
echo "Q(3): <br>".(reverse("Hello"))."<br>";

//Question number 4
function alpha($names) {
asort($names);
echo "Q(4): <br>";
foreach($names as $sorted){
    echo "$sorted, ";}}

alpha(array("Hala", "Heba", "Ghaida'a", "Salsabeel"));
echo "<br>";

//Question number 5
function lowerCase ($str)
{if (strtolower ($str) == $str){
return "string is all lowercase";}
else return "string isn't all lowercase";
}
echo "Q(5): <br>".(lowerCase("Hello"))."<br>";

//Question number 6
function palindrome ($str)
{if (strrev (str_replace(' ', '', $str)) ==  str_replace(' ', '', $str)){
return "string is a palindrome";}
else return "string isn't a palindrome";
}
echo "Q(6): <br>".(palindrome("nurses run"))."<br>";

//Question number 7
function sum($arr, $summation)
{
$count = count($arr) - 2;
$consecutive=[];
for ($x = 0; $x < $count; $x++) {
if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $summation) {
array_push($consecutive, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]}");
}
}
return $consecutive;
}
var_dump(sum (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16));


?>