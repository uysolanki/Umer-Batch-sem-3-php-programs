<?php
$phy=$_GET['t1'];
$chem=$_GET['t2'];
$bio=$_GET['t3'];
$maths=$_GET['t4'];
$marathi=$_GET['t5'];
$eng=$_GET['t6'];
session_start();

$total=$phy+$chem+$bio+$maths+$marathi+$eng;
$per=$total/6;

echo "Student Name is " . $_SESSION['studentname']. "<br>";
echo "Student Class is " . $_SESSION['studentclass']. "<br>";
echo "Student Address is " . $_SESSION['studentaddress']. "<br>";
echo count($_SESSION). "<br>";
unset($_SESSION['studentaddress']);
echo count($_SESSION). "<br>";
echo "Subject				Marks/100<br>";
echo "Physics				$phy<br>";
echo "Chemistry				$chem<br>";
echo "Biology				$bio<br>";
echo "Maths					$maths<br>";
echo "Marathi				$marathi<br>";
echo "English				$eng<br>";

echo "Total/600				$total<br>";
echo "Percentage 			$per<br>";

session_destroy();
?>