<?php
$code=$_GET['t1'];
$name=$_GET['t2'];
$qty=$_GET['t3'];
$price=$_GET['t4'];
$total=$qty*$price;

echo "*****BILL*******<br>";
echo "Item Code :  $code <br>";
echo "Item Name :  $name <br>";
echo "Item Qty :   $qty <br>";
echo "Unit Price:  $price <br>";
echo "Total :  $total <br>";
echo "***Thank You!***";               


?>