<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
</head>
<body>
    <h1>Mayor de Tres Números</h1>
    <form method="post" action="">
        <label for="num1">Primer número:</label>
        <input type="text" name="num1" required><br><br>
        <label for="num2">Segundo número:</label>
        <input type="text" name="num2" required><br><br>
        <label for="num3">Tercer número:</label>
        <input type="text" name="num3" required><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = (float)$_POST['num1'];
        $numero2 = (float)$_POST['num2'];
        $numero3 = (float)$_POST['num3'];

        $mayor = $numero1;

        if ($numero2 > $mayor) {
            $mayor = $numero2;
        }
        if ($numero3 > $mayor) {
            $mayor = $numero3;
        }

        echo "El número mayor es: $mayor";
    }
    ?>
</body>
</html>
