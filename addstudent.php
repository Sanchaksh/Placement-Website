
<?php

if(isset($_REQUEST["b1"]))
    
    {
    
    $f=$_REQUEST["t1"];
    $l=$_REQUEST["t2"];
    $e=$_REQUEST["t3"];
    $c=$_REQUEST["t4"];
    $add=$_REQUEST["t5"];
    $te=$_REQUEST["t6"];
    $tw=$_REQUEST["t7"];
    $gr=$_REQUEST["t8"];
    $img=$_REQUEST["t9"];
    $pass=$_REQUEST["t10"];

    $m="insert into tbstud(fname,lname,email,contact,address,tenth,twelth,grad,image,password)values('$f','$l','$e','$c','$add','$te','$tw','$gr','$img','$pass')";
    $db=mysqli_connect("localhost","id17226305_final","y~U~-eV1XEC6ApMK");
    mysqli_select_db($db,"id17226305_finalproject");
    mysqli_query($db,$m);
}
    ?>
<HTML>

<HEAD>

<h1 align="center">THAPAR PLACEMENT CELL</h1>

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
  background-color:black;
  color: white;
  margin-bottom: 50px;
}

   p
{
  font-weight: bold;
  font-size: 15px;
}

 h2 
 {
  background-color:black;
  color: white;
  margin-bottom: 60px;
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
}

a:hover, a:active 
{
  background-color: #008CBA;
}

</STYLE>

</HEAD>
	
<FORM name="f1">

<h1 align = "center">STUDENT REGISTERATION</h1>

    <label for="t1" class = "thick" >First Name</label>
	<input type="text" name="t1" placeholder="First name..." />
	
    <label for="t1" class = "thick" >Last Name</label>
	<input type="text" name="t2" placeholder="Last Name..." />
	
    <label for="t1" class = "thick" >Email ID</label>
	<input type="text" name="t3" placeholder="Email ID..." />
	
    <label for="t1" class = "thick" >Contact Number</label>
	<input type="text" name="t4" placeholder="Contact Number..." />
	
    <label for="t1" class = "thick" >Address</label>
	<input type="text" name="t5" placeholder="Address..." />
	
    <label for="t1" class = "thick" >10th grade marks</label>
	<input type="text" name="t6" placeholder="10th grade marks" />
	
    <label for="t1" class = "thick" >12th grade marks</label>
	<input type="text" name="t7" placeholder="12th grade marks..." />
	
    <label for="t1" class = "thick" >Graduation marks</label>
	<input type="text" name="t8" placeholder="Graduation marks..." />
	
    <label for="t1" class = "thick" >Image</label>
	<input type="text" name="t9" placeholder="Image..." />
	
    <label for="t1" class = "thick" >Password</label>
	<input type="text" name="t10" placeholder="Password..." />
	
    <input class = "button button1" type="submit" name="b1" />
	
</FORM>

<a href="studentlogin.php">Login</a>

<footer>
    *Admin will contact you with the Student Id registered with us.
</footer>

</HTML>
