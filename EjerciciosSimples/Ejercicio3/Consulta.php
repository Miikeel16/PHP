<?php
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$num3=$_REQUEST["num3"];

$mayor= max($num1, $num2, $num3);

echo $mayor;

// if ($num1>$num2 and $num1>$num3) {
//     echo $num1;
// }else if ($num2>$num1 and $num2>$num3) {
//     echo $num2;
// }else{
//     echo $num3;
// }
?>