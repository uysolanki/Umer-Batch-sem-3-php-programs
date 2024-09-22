<?php
$p1=$_GET['p1'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("saamudb",$con);
$query = "SELECT e . *
FROM emp3b e, project p, proemp pe
WHERE e.eno = pe.eno
AND p.pno = pe.pno
AND pname LIKE '$p1'";

$result=mysql_query($query,$con);
$count = mysql_num_rows($result);
if($count>0)
{
echo "<html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'></head>";
echo "<body>";
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>ENO</th>";
echo "<th scope='col'>Ename</th>";
echo "<th scope='col'>Qualification</th>";
echo "<th scope='col'>DOJ</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$sum=0;
while($row=mysql_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$row['eno']."</td>";
	echo "<td>".$row['ename']."</td>";
	echo "<td>".$row['qual']."</td>";
	echo "<td>".$row['doj']."</td>";
	echo "</tr>";
}

echo "</tbody>";
echo "</table>";
echo "</body>";
echo "</html>";
}
else
{
	echo "Mehnat ki bahot zarurat he";
}
?>