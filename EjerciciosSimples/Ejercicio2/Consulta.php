<?php
$suma=isset($_REQUEST["suma"]);
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
if ($suma==TRUE) {
    echo $num1+$num2;
}else{
    echo $num1-$num2;
}


?>