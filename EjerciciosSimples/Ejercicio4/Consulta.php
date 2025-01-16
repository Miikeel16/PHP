<?php
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$num3=$_REQUEST["num3"];
$suma=isset($_REQUEST["suma"]);

if ($suma==TRUE) {
    $mayor= max($num1, $num2, $num3);
    echo "El mayor es: $mayor";
}else{
    $menor= min($num1, $num2, $num3);
    echo "El menor es: $menor";
}
?>