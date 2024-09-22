<?php
$sname=$_GET['t1'];
$classname=$_GET['t2'];
$address=$_GET['t3'];
session_start();
if(!isset($_SESSION['studentname']))
{
	$_SESSION['studentname']=$sname;
}

if(!isset($_SESSION['studentclass']))
{
	$_SESSION['studentclass']=$classname;
}

if(!isset($_SESSION['studentaddress']))
{
	$_SESSION['studentaddress']=$address;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="showresult.php">
	<div class="form-group">
    Physic Marks : <input type="text" name="t1" class="form-control col-sm-2">
	</div>
	<div class="form-group">
    Chem Marks : <input type="text" name="t2" class="form-control col-sm-2">
	</div>
	<div class="form-group">
    Bio Marks : <input type="text" name="t3" class="form-control col-sm-2">
	</div>
	<div class="form-group">
    Maths Marks : <input type="text" name="t4" class="form-control col-sm-2">
	</div>
	<div class="form-group">
    Marathi Marks : <input type="text" name="t5" class="form-control col-sm-2">
	</div>
	<div class="form-group">
    English Marks : <input type="text" name="t6" class="form-control col-sm-2">
	</div>
	
	<div class="form-group">
    <input type= "submit" value="PRINT RESULT" name="sub1" class="btn btn-success">
    <input type= "reset" value="CLEAR" name="res1" class="btn btn-danger">
	</div>
    </form>
</body>
</html>