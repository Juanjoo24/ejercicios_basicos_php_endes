<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <h1>Introduzca un número del 1 al 7</h1>
    <form method="post" action="">
        <input type="text" name="numero" required min="1" max="7">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST['numero'];

        switch ($numero) {
            case 1:
                $dia = "Lunes";
                break;
            case 2:
                $dia = "Martes";
                break;
            case 3:
                $dia = "Miércoles";
                break;
            case 4:
                $dia = "Jueves";
                break;
            case 5:
                $dia = "Viernes";
                break;
            case 6:
                $dia = "Sábado";
                break;
            case 7:
                $dia = "Domingo";
                break;
            default:
                $dia = "Número fuera de rango no existe";
                break;
        }

        echo "el dia es: $dia";
    }
    ?>
</body>
</html>
