<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distancia = floatval($_POST['distancia']);
    $velocidad = floatval($_POST['velocidad']);

    if ($velocidad > 0) {
        $tiempo = $distancia / $velocidad;
        echo "<h1>Resultado</h1>";
        echo "<p>El tiempo del viaje es de " . number_format($tiempo, 2) . " horas.</p>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>La velocidad debe ser mayor que 0.</p>";
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Por favor, envía el formulario correctamente.</p>";
}
?>
