<form>
<h1>COMPANY ACCOUNT</h1>

<input type="text" name="t2" placeholder="Enter new password"/><br>
<input type="submit" name="b1" value="Update"/><br>
<input type="submit" name="b2" value="Return To Home Page">

</form>


<?php
if(isset($_REQUEST["b1"]))
{
	session_start();
	$i=$_SESSION["id"];
	
	$pass=$_REQUEST["t2"];	
	
	$q="update tbcompany set password = '$pass' where id =$i";

	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	mysqli_query($db,$q);
}
if(isset($_REQUEST["b2"]))
{
	
	header("Location:companylogin.php");
	
}

?>