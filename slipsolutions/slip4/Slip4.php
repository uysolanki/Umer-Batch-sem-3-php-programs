<?php
$custname=$_GET['a1'];
$consno=$_GET['a2'];
$units=$_GET['a3'];
$total=0;

if($units>0 && $units<=50)
{
    if($units<10)
    {
        $total=150;
    }
    else
    {
    $total=$units*3.50;
    }
}
else if($units>50 && $units<=150)
{
    $total=(50*3.50)+(($units-50)*4.00);
}
else if($units>150 && $units<=250)
{
    $total=(50*3.50)+(100*4.00)+(($units-150)*5.20);
}
else if($units>250 )
{
    $total=(50*3.50)+(100*4.00)+(100*5.20)+(($units-250)*6.50);
}

echo "**BILL**<br>";
echo "Customer Name:$custname<br>";
echo "Consumer No:$consno<br>";
echo "Units Consumed:$units<br>";
echo "Total Bill:$total<br>";
echo "**ThankYou!**";
?>