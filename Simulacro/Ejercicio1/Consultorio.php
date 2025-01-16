<?php
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2'];

    $checkbox = isset($_POST['checkbox']);

    if ($checkbox == FALSE) {
        $cantidad1 = strlen((string) abs($num1));
        echo $cantidad1;
    }else{
        $cantidad2 = strlen((string) abs($num2));
        echo $cantidad2;
    }
?>