<form>
<h1>LOGIN STUDENT</h1>
<input type="text" name="t1" placeholder="Enter Roll-no">
<input type="text" name="t2" placeholder="Enter Password">
<input type="submit" name="b1" value="Login"><br><br><br>
<a href="addstudent.php">Register as a student</a>
<a href="index.php">Home Page</a>
</form>

<?php
if(isset($_REQUEST["b1"]))
{	
	$u=$_REQUEST["t1"];
	$pass=$_REQUEST["t2"];
	$q="select * from tbstud where rno=$u and password='$pass'";
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	$result=mysqli_query($db,$q);

	if(mysqli_num_rows($result)>0)
{
	session_start();
	$_SESSION["rno"]=$u;
	header("Location:studentaccount.php");
	
}

else
	{
		echo "Invalid username or password";

	}

}



	
?>
