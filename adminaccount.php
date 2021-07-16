<!DOCTYPE html>
<html>
<head>
	<title>Administrator Account</title>
</head>
<body>
<h1 align="center">ADMINISTRATOR ACCOUNT</h1>

<?php
	session_start();
	if(isset($_SESSION["ano"]))
	{
		?>
<a href="addcompany.php">Click here to register a company</a><br><br>
<a href="addstudent.php">Click here to register a student.</a><br><br>
<a href="changeadminpass.php">Click here to change password</a><br><br>
<a href="viewcompany.php">Click here to view companies</a>
<?php

	}
else
	{

	header('Location:adminlogin.php');
	}


?>

</body>
</html>
