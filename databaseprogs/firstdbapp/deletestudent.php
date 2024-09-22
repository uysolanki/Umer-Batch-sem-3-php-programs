<?php
$rno=$_GET['t1'];
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

$query="delete from student where rno=".$rno;
$result=mysql_query($query,$con);
if($result && mysql_affected_rows($con) > 0)
{
	echo "record deleted";
}
else
{
	echo "record not deleted";
}

?>