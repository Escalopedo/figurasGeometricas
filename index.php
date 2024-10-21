<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // guardamos la figura si ha selecciona
    $_SESSION['figura'] = $_POST['figura'];

    // en el caso que sí, le redirigimos a la página, en el caso que no, sale index
    header('Location: introducir_lados.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h1>Elige el tipo de figura</h1>
    <form action="index.php" method="post">
        <label for="figura">Selecciona la figura:</label>
        <select name="figura" id="figura">
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="triangulo">Triángulo</option>
            <option value="circulo">Círculo</option>
        </select>
        <br><br>
        <input type="submit" value="Siguiente">
    </form>
</body>
</html>
