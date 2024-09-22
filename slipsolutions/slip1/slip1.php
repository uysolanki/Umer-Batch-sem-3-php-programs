<?php
$n1=$_GET['t1'];
$n2=$_GET['t2'];
$task=$_GET['r1'];

switch($task)
{
    case "add" : $n3=$n1+$n2;
                 echo "Result is $n3";
                 break;
    case "sub" : $n3=$n1-$n2;
                 echo "Result is $n3";
                 break;
    case "mult" : $n3=$n1*$n2;
                 echo "Result is $n3";
                 break;
    case "div" : $n3=$n1/$n2;
                 echo "Result is $n3";
                 break;
    default: echo "Invalid Input";
                
}

?>