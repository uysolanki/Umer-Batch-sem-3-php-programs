<?php
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
$query="select * from student";
$result=mysql_query($query,$con);
echo "<html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'></head>";
echo "<body>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>RNO</th>";
echo "<th scope='col'>Name</th>";
echo "<th scope='col'>Mobile</th>";
echo "<th scope='col'>Stream</th>";
echo "<th scope='col'>Gender</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row=mysql_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$row['rno']."</td>";
	echo "<td>".$row['sname']."</td>";
	echo "<td>".$row['mobile']."</td>";
	echo "<td>".$row['stream']."</td>";
	echo "<td>".$row['gender']."</td>";
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</body>";
echo "</html>";
?>