
<form name="f1">
    <input type="text" name="t1" placeholder="Enter Id" />
    <input type="text" name="t2" placeholder="Enter Password" />
    <input type="submit" value="Login" name="b1" />


</form>
    
    <?php
    session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_REQUEST["b1"]))
{
    $u=$_REQUEST["t1"];
    $pass=$_REQUEST["t2"];
    $q="select * from tbadmin where id = $u and password = '$pass'";
    $db =  mysqli_connect("localhost","root","");
    mysqli_select_db($db,"finalproject");
    $result=mysqli_query($db, $q);
 

    if(mysqli_num_rows($result)>0)
{
	session_start();
	$_SESSION["id"]=$u;
	header("Location:adminaccount.php");
	
}

else
	{
		echo "Not an Administrator";

	}

}



	
?>


