<?php
        $numero = $_POST["numero"];

            if ($numero % 2 == 0) {
                echo "El número $numero es par.";
            } else {
                echo "El número $numero es impar.";
            }
    ?>