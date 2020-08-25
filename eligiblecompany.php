<form>
R.no. <input type="text" name="t1">
<input type="submit" name="b1" value="view">
</form>


<?php

if(isset($_REQUEST["b1"]))

{
	$rno=$_REQUEST["t1"];
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	$q="select p.rno as rno,p.fname as fname,c.cname as cname from tbstud p , tbcompany c where p.rno=$rno and p.tenth>=c.tenthr and p.twelth>=c.twelthr and p.grad>=c.gradr";
	$result=mysqli_query($db,$q);
	while($row = mysqli_fetch_array($result))
	{
		extract($row);
		echo "The Roll no is $rno and the name of the candidate is $fname the companies names are $cname<br><br>";
	}

}
?>
