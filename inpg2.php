<?php
	
	session_start();
	$i=$_SESSION["id"];
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	$q="select c.id as id,c.cname as cname,p.fname as fname from tbstud p , tbcompany c where c.tenthr>=p.tenth and c.twelthr>=p.twelth and c.gradr>=p.grad";
	$result=mysqli_query($db,$q);
	while($row = mysqli_fetch_array($result))
	{
		extract($row);
		echo "The eligible students are $fname<br><br>";
	}


?>
