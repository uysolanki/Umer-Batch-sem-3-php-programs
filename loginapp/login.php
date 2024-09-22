<?php

$username=$_POST['t1'];
$password=$_POST['t2'];

if($username==$password)
{
	echo "Valid User";
}
else
{
	echo "InValid User";
}


?>