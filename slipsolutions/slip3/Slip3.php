<?php
$index=$_GET['t1'];
$fruits=array('a'=>'Apple', 'c'=>'Chicku', 'b'=>'Banana','s'=>'Strawberry', 'p'=>'PineApple', 'g'=>'Guava');
//print_r($arr);
echo "Content of Array After Creation is " ;
var_dump($fruits);

echo "Size of Array is " . sizeof($fruits);
unset($fruits[$index]);

echo "Content of Array After Deletion is " ;
var_dump($fruits);

$newFruits=array_flip($fruits);
echo "Content of Array After Reverse K,V is " ;
var_dump($newFruits);

shuffle($fruits);
echo "Content of Array After Shuffling is " ;
var_dump($fruits);
?>