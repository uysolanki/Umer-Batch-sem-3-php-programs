<?php
$eno=$_GET['e1'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("saamudb",$con);
$query = "select * from salary where eno=$eno ORDER BY FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')";
$result=mysql_query($query,$con);
echo "<html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'></head>";
echo "<body>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>ENO</th>";
echo "<th scope='col'>Month</th>";
echo "<th scope='col'>Year</th>";
echo "<th scope='col'>Basic</th>";
echo "<th scope='col'>HRA</th>";
echo "<th scope='col'>TA</th>";
echo "<th scope='col'>DA</th>";
echo "<th scope='col'>Total</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$sum=0;
while($row=mysql_fetch_assoc($result))
{
	$total=$row['basic']+$row['hra']+$row['da']+$row['ta'];
	$sum=$sum+$total;
	echo "<tr>";
	echo "<td>".$row['eno']."</td>";
	echo "<td>".$row['month']."</td>";
	echo "<td>".$row['year']."</td>";
	echo "<td>".$row['basic']."</td>";
	echo "<td>".$row['hra']."</td>";
	echo "<td>".$row['ta']."</td>";
	echo "<td>".$row['da']."</td>";
	echo "<td>".$total ."</td>";
	echo "</tr>";
}

echo "<tr>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>".$sum ."</td>";
	echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</body>";
echo "</html>";
?>