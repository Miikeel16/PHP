<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$radio=$_POST["radio"];

if ($radio=="suma") {
    echo "La suma es: ".$num1+$num2;
}elseif ($radio=="resta") {
    echo "La resta es: ".$num1-$num2;
}elseif ($radio=="multiplicacion") {
    echo "La multiplicacion es: ".$num1*$num2;
}elseif ($radio=="division") {
    echo "La division es: ".$num1/$num2;
}
?>