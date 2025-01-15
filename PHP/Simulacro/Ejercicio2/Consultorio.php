<?php
        $num1 = $_POST['num1'];
        $checkbox = isset($_POST['checkbox']);

        $suma = 0;

        for ($i = 0; $i < strlen($num1); $i++) {
            $digito = (int)$num1[$i];

            if ($checkbox == TRUE) {

                if ($digito % 2 !== 0) {
                    $suma = $suma + $digito;
                }
            } else {
                if ($digito % 2 === 0) {
                    $suma= $suma + $digito;
                }
            }
        }
        echo $suma;
    ?>