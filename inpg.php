<?php
	
	session_start();
	$u=$_SESSION["rno"];
echo"$u";
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	$q="select p.rno as rno, p.fname as fname,c.cname as cname from tbstud p , tbcompany c where p.tenth>=c.tenthr and p.twelth>=c.twelthr and p.grad>=c.gradr and p.rno=$u";
	$result=mysqli_query($db,$q);

	while($row = mysqli_fetch_array($result))
	{
		extract($row);
		echo "Eligibility companies are $cname<br><br>";
	}

?>
