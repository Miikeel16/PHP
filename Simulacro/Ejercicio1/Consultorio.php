<?php
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2'];

    $checkbox = isset($_POST['checkbox']);

    if ($checkbox == TRUE) {
        $cantidad1 = strlen((string) abs($num1)); //para obtener el valor absoluto de $num1. Esto asegura que el número sea positivo, eliminando cualquier signo negativo.
        echo $cantidad1;
    }else{
        $cantidad2 = strlen((string) abs($num2));
        echo $cantidad2;
    }
    //La función strlen() cuenta el número de caracteres de la cadena. 
    //Como la cadena representa el número en su forma decimal, este valor será el número de dígitos en el número original, 
    //sin importar si era positivo o negativo.
?>