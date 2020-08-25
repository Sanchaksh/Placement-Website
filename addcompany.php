<form name="f1">
    <input type="text" name="t1" placeholder="Enter company name" />
    <input type="text" name="t2" placeholder="Enter email" />
    <input type="text" name="t3" placeholder="Enter contact" />
    <input type="text" name="t4" placeholder="Enter address" />
    <input type="text" name="t5" placeholder="Enter tenth marks" />
    <input type="text" name="t6" placeholder="Enter twelth marks" />
    <input type="text" name="t7" placeholder="Enter graduation marks" />
    <input type="text" name="t8" placeholder="Logo" />
    <input type="text" name="t9" placeholder="Enter password" />
    <input type="submit" name="b1" />
</form>

<?php

if(isset($_REQUEST["b1"]))
    
    {
    
    $cn=$_REQUEST["t1"];
    $e=$_REQUEST["t2"];
    $c=$_REQUEST["t3"];
    $add=$_REQUEST["t4"];
    $ter=$_REQUEST["t5"];
    $twr=$_REQUEST["t6"];
    $grr=$_REQUEST["t7"];
    $logo=$_REQUEST["t8"];
    $pass=$_REQUEST["t9"];
   

    $m="insert into tbcompany(cname,email,contact,address,tenthr,twelthr,gradr,clogo,password)values('$cn','$e','$c','$add','$ter','$twr','$grr','$logo','$pass')";
    $db=mysqli_connect("localhost","root","");
    mysqli_select_db($db,"finalproject");
    mysqli_query($db,$m);
}
    ?>