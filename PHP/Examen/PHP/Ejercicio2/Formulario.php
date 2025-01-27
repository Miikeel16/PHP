<?php
$num=$_POST["num"];
$aux=2;

while ($num%$aux!=0) {
    $aux++;
}
if ($num==$aux) {
    echo "Es primo";
}else{
    echo "No es primo";
}
?>