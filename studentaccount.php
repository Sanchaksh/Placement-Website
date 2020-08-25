<!DOCTYPE html>
<html>
<head>
	<title>Student Account</title>
</head>
<body>
<h1>STUDENT ACCOUNT</h1>

<?php
	session_start();
	if(isset($_SESSION["rno"]))
	{
		?>
<a href="changestudentpassword.php">Click here to change your password</a><br><br>
<a href="updatestudentdetails.php">Click Here to change your details</a><br><br>
<a href="inpg.php">Click here to view eligible companies</a><br><br>
<a href="studentlogin.php">Logout</a>

<?php

	}
else
	{

	header('Location:studentlogin.php');
	}


?>

</body>
</html>