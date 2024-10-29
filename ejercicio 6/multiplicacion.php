<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    if ($numero >= 1 && $numero <= 10) {
        echo "Tabla de multiplicar del $numero: <br>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo " <br> $numero x $i = $resultado <br>";
        }
    } else {
        echo "Numero invalido, introduzca un numero del 1 al 10";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
