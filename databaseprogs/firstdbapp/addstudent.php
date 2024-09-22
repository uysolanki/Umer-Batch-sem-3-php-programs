<?php
$rno=$_GET['t1'];
$sname=$_GET['t2'];
$mobile=$_GET['t3'];
$stream=$_GET['s1'];
$gender=$_GET['r1'];

// echo "$rno<br>";
// echo "$sname<br>";
// echo "$mobile<br>";
// echo "$stream<br>";
// echo "$gender<br>";

$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Machine connection successful<br>";
}
else
{
    echo "Error in Machine connection<br> ";
}

$db=mysql_select_db("saamudb",$con);
if($db)
{
    echo "DB connection successful<br>";
}
else
{
    echo "Error in DB connection<br> ";
}
$query="insert into student values($rno,'$sname',$mobile,'$stream','$gender')";
$result=mysql_query($query,$con);
if($result)
{
    echo "Record Insertion successful<br>";
}
else
{
    echo "Error in Record Insertion<br> ";
}
?>