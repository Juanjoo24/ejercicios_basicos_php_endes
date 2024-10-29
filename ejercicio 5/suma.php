<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = intval($_POST['numero']);

    $suma = ($N * ($N + 1)) / 2; 

    echo "La suma de todos los números desde 1 hasta $N es: $suma";
} else {
    echo "Error, introduzca otro numero";
}
?>
