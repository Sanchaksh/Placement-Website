<form name="f1">
    <input type="text" name="t1" placeholder="Enter first name" />
    <input type="text" name="t2" placeholder="Enter last name" />
    <input type="text" name="t3" placeholder="Enter email" />
    <input type="text" name="t4" placeholder="Enter contact" />
    <input type="text" name="t5" placeholder="Enter address" />
    <input type="text" name="t6" placeholder="Enter tenth marks" />
    <input type="text" name="t7" placeholder="Enter twelth marks" />
    <input type="text" name="t8" placeholder="Enter graduation marks" />
    <input type="text" name="t9" placeholder="Image" />
    <input type="text" name="t10" placeholder="Enter password" />
    <input type="submit" name="b1" />
    <a href="studentlogin.php">Login after registration</a>
</form>

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
    $db=mysqli_connect("localhost","root","");
    mysqli_select_db($db,"finalproject");
    mysqli_query($db,$m);
}
    ?>