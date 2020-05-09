<form>
<h1>STUDENT ACCOUNT</h1>

<input type="text" name="t2" placeholder="Enter new password"/><br>
<input type="text" name="t1" placeholder="Re-enter Password"><br>
<input type="submit" name="b1" value="Update"/><br>
<input type="submit" name="b2" value="Return To Home Page">

</form>


<?php
if(isset($_REQUEST["b1"]))
{
	session_start();
	$r=$_SESSION["rno"];
	$pass=$_REQUEST["t2"];	
	$rpass=$_REQUEST["t1"];
	if($pass=$rpass)
{	
	$q="update tbstud set password = '$pass' where rno =$r";

	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	mysqli_query($db,$q);
}
}
else
{
	
	echo"The passwords donot match";

}
if(isset($_REQUEST["b2"]))
{
	
	header("Location:studentaccount.php");
	
}



?>
