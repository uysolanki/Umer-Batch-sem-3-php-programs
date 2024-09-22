<?php
class Student
{
private $rno;
private $sname;
private $per;

public function acceptStudent()
{
	$this->rno=101;
	$this->sname="Alice";
	$this->per=78.5;
	
}

public function displayStudent()
{
	echo "$this->rno<br>";
	echo "$this->sname<br>";
	echo "$this->per<br>";
}
}

$s1=new Student();
$s1->displayStudent();

$s1->acceptStudent();
$s1->displayStudent();
?>