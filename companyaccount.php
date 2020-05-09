<!DOCTYPE html>
<html>
<head>
	<title>Company Account</title>
</head>
<body>
<h1>COMPANY ACCOUNT</h1>

<?php
	session_start();
	if(isset($_SESSION["id"]))
	{
		?>
<a href="changecompanypass.php">Click here to change your password</a><br><br>
<a href="updatecompanydetails.php">Click here to update your details.</a><br><br>
<a href="inpg2.php">Click here to view the eligible students.</a><br><br>
<a href="viewdetails.php">Click here to View Details of all the candidates</a>

<?php

	}
else
	{

	header('Location:companylogin.php');
	}


?>

</body>
</html>