
<HTML>

 <HEAD>
	
    <h1 align="center">THAPAR PLACEMENT CELL</h1>
	
</HEAD>

<STYLE>

body 
{
  background-image: url('https://hirecanada.ca/wp-content/uploads/2014/11/blurred-background-office.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  
}

h1
{
background-color: black;
color: white;
 margin-bottom: 50px;
}

h2
{
background-color: black;
color: white;
margin-bottom: 25px;
}

input[type=text] 
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}


input[type=text]:focus 
{
  background-color: lightblue;
}

form 
{
 width: 550px;
 height: 450px;
 margin: auto;
 position: relative;
 align: centre;
}

label.thick 
{
  font-weight: bold;
}

.button 
{

  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

  background-color: #008CBA; /* blue */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  margin-bottom: 25px;
  
}

.button1 
{

  text-align:center;
  position:relative;
  white-space: nowrap;                 
  left: 50%;                          
  top: 50px;                        
  transform: translate(-50%,-50%);    
   
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button1:hover 

{
  background-color: #008CBA;
  color: white;
}

a:link, a:visited 
{
  background-color: #008CBA;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position: absolute;
  top: 90px;
  right: 30px;
  margin-bottom: 25px;
}

a:hover, a:active 
{
  background-color: #008CBA;
}

.footer 
{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 200px;
    background-image: url('https://www.everynation.org/wp-content/uploads/2018/02/Monthly-Website-Header-background.jpg');
	border-top-right-radius: 60%;
}

</STYLE>

<form>

<h1 align = "center">CHANGE PASSWORD</h1>

<label for="t2" class = "thick" >New Password</label>
<input type="text" name="t2" placeholder="New Password..."/><br>

<label for="t1" class = "thick" >Re-enter Password</label>
<input type="text" name="t1" placeholder="New Password..."><br>

<input class = "button button1" type="submit" name="b1" value="Update"/><br>

</form>

<FOOTER>

<div class="footer">

</div>

</HTML>

<?php
if(isset($_REQUEST["b1"]))
{
	session_start();
	$r=$_SESSION["rno"];
	$pass=$_REQUEST["t2"];	
	$rpass=$_REQUEST["t1"];
	if($pass=$rpass)
{	
	$q="update tbstud set password = '$pass' where rno =$r";

	$db=mysqli_connect("localhost","id17226305_final","y~U~-eV1XEC6ApMK");
	mysqli_select_db($db,"id17226305_finalproject");
	mysqli_query($db,$q);
}
}
else
{
	
	echo"The passwords donot match";

}


?>
<a href = "studentaccount.php">Home Page</a>
