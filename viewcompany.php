<form>
    <select name="s1">
    
        
        <?php
        
        $cl=$_REQUEST["s1"];
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	$q="select * from tbcompany";
	$result=mysqli_query($db,$q);
	while($row = mysqli_fetch_array($result))
	{
		extract($row);
                echo"<option>$cname</option>";
                	}
        
        ?>
    </select>
<?php

if(isset($_REQUEST["b1"]))

{
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"finalproject");
	$q="select c.id as id,c.cname as cname,p.fname as fname from tbstud p , tbcompany c where c.cname='$cl' and c.tenthr>=p.tenth and c.twelthr>=p.twelth and c.gradr>=p.grad";

	$result=mysqli_query($db,$q);
	while($row = mysqli_fetch_array($result))
	{
		extract($row);
                
		echo "The eligible student is $fname <br><br>";
	}

}
?>

            
<input type="submit" name="b1" value="view">
</form>

