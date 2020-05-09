<form>
<?php
	session_start();
	$i=$_SESSION["id"];
	$q="select * from tbcompany where id =$i";
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db ($db,"finalproject");
	$result = mysqli_query($db,$q);
	while($row = mysqli_fetch_array($result))
{
	extract($row);
	echo"<input type='text' name='t1' value='$cname'/>";
	echo"<input type='text' name='t2' value='$email'/>";
	echo"<input type='text' name='t3' value='$contact'/>";
	echo"<input type='text' name='t4' value='$address'/>";
	echo"<input type='text' name='t5' value='$tenthr'/>";
	echo"<input type='text' name='t6' value='$twelthr'/>";
	echo"<input type='text' name='t7' value='$gradr'/>";
	echo"<input type='text' name='t8' value='$clogo'/>";
	echo"<input type='submit' name='b1' value='Update Details'/>";
}


if(isset($_REQUEST["b1"]))
{
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	

	$q=$_REQUEST["t1"];
	$o1=$_REQUEST["t2"];
	$o2=$_REQUEST["t3"];
	$o3=$_REQUEST["t4"];
	$o4=$_REQUEST["t5"];
	$ca=$_REQUEST["t6"];
	$gr=$_REQUEST["t7"];
	$clogo=$_REQUEST["t8"];
	mysqli_query($db,$q);
	
	$qe="update tbcompany set cname = '$q', email = '$o1', contact = '$o2', address = '$o3' , tenthr = '$o4' , twelthr = '$ca' , gradr = '$gr' ,clogo = '$clogo' where id =$i";
	mysqli_query($db,$qe);

}

?>

</form>

<br><br><a href="companyaccount.php">Click here to view company account</a>

