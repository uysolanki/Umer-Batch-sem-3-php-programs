<html>
<head>
</head>
<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Enter Username : <input type="text" name="t1" value="<?php if(isset($_POST['t1'])) echo $_POST['t1'];?>"> <br>
		Enter Password : <input type="password" name="t2"> <br>
		<input type="submit" name="s1" value="LOGIN"> <br>
		</form>
</body>
</html>


<?php
if(isset($_POST['s1']))
{
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
}
?>