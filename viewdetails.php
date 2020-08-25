<table border="2" width="90%">

<?php
session_start();
$i=$_SESSION["rno"];
$q="select * from tbstud";
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"finalproject");
$result=mysqli_query($db,$q);

while($row = mysqli_fetch_array($result))
{
	extract($row);
	echo "<tr><td>$rno</td><td>$fname</td><td>$lname</td><td>$email</td><td>$contact</td><td>$address</td><td><img width='100' height='100' src=image/$image></td>";
}


?>

</table>
