<?php
if ($_POST) {
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Edad</title>
</head>
<body>

    <form action="" method="post">
        <label for="edad">Introduce tu edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br>
        <input type="submit" value="Verificar">
    </form>

</body>
</html>