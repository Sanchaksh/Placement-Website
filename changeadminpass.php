<form>
<h1>ADMIN ACCOUNT</h1>

<input type="text" name="t2" placeholder="Enter new password"/><br>
<input type="submit" name="b1" value="Update"/><br>
<input type="submit" name="b2" value="Return To Home Page">

</form>


<?php
if(isset($_REQUEST["b1"]))
{
	session_start();
	$i=$_SESSION["ano"];
	
	$pass=$_REQUEST["t2"];	
	
	$q="update tbadmin set password = '$pass' where ano =$i";

	$db=mysqli_connect("localhost","id17226305_final","y~U~-eV1XEC6ApMK");
	mysqli_select_db($db,"id17226305_finalproject");
	mysqli_query($db,$q);
}
if(isset($_REQUEST["b2"]))
{
	
	header("Location:adminlogin.php");
	
}

?>
