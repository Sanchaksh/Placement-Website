<form>
<?php
	session_start();
	$i=$_SESSION["rno"];
	$q="select * from tbstud where rno =$i";
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db ($db,"finalproject");
	$result = mysqli_query($db,$q);
	while($row = mysqli_fetch_array($result))
{
	extract($row);
	echo"<input type='text' name='t1' value='$fname'/>";
	echo"<input type='text' name='t2' value='$lname'/>";
	echo"<input type='text' name='t3' value='$email'/>";
	echo"<input type='text' name='t4' value='$contact'/>";
	echo"<input type='text' name='t5' value='$address'/>";
	echo"<input type='text' name='t6' value='$tenth'/>";
	echo"<input type='text' name='t7' value='$twelth'/>";
	echo"<input type='text' name='t8' value='$grad'/>";
	echo"<input type='text' name='t9' value='$image'/>";
	echo"<input type='submit' name='b1' value='Update Details'/>";
        
}


if(isset($_REQUEST["b1"]))
{
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	

	$f=$_REQUEST["t1"];
	$l=$_REQUEST["t2"];
	$e=$_REQUEST["t3"];
	$co=$_REQUEST["t4"];
	$ad=$_REQUEST["t5"];
	$te=$_REQUEST["t6"];
	$tw=$_REQUEST["t7"];
	$gr=$_REQUEST["t8"];
	$image=$_REQUEST["t9"];
	mysqli_query($db,$q);
	
	$q="update tbstud set fname = '$f', lname = '$l', email = '$e', contact = '$co', address = '$ad' , tenth = '$te' , twelth = '$tw' , grad = '$gr' , image = '$image' where rno =$i";
	mysqli_query($db,$q);

}

?>

</form>
<br><br>
<a href="studentaccount.php">Click here to view your account</a>

