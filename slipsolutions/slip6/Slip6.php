<?php

$str=$_GET['t1'];
$revStr=strrev($str);
// if($revStr==$str)
// echo "Palindrome";
// else
// echo "Not Palindrome";
$n=strcmp($str,$revStr);
if($n==0)
 echo "Palindromeee";
 else
 echo "Not Palindromeee";

?>