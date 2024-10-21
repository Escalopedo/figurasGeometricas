<?php
session_start();

// Verificar si se ha seleccionado una figura en la sesión
if (!isset($_SESSION['figura'])) {
    // Si no hay figura seleccionada, redirigir al usuario a la página principal
    header('Location: index.php');
    exit();
}

$figura = $_SESSION['figura'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducir Lados</title>
</head>
<body>
    <h1>Introducir lados:</h1>
    <form action="resultados.php" method="post">
        <!-- Caso para Cuadrado -->
        <?php if ($figura == 'cuadrado') { ?>
            <label for="lado1">Introduce el lado del cuadrado:</label>
            <input type="number" name="lado1" id="lado1" required>
        <?php } ?>
        
        <!-- Caso para Círculo -->
        <?php if ($figura == 'circulo') { ?>
            <label for="lado1">Introduce el radio del círculo:</label>
            <input type="number" name="lado1" id="lado1" required>
        <?php } ?>

        <!-- Caso para Rectángulo -->
        <?php if ($figura == 'rectangulo') { ?>
            <label for="lado1">Introduce el lado 1 del rectángulo:</label>
            <input type="number" name="lado1" id="lado1" required>
            <br><br>
            <label for="lado2">Introduce el lado 2 del rectángulo:</label>
            <input type="number" name="lado2" id="lado2" required>
        <?php } ?>

        <!-- Caso para Triángulo -->
        <?php if ($figura == 'triangulo') { ?>
            <label for="lado1">Introduce el lado 1 del triángulo:</label>
            <input type="number" name="lado1" id="lado1" required>
            <br><br>
            <label for="lado2">Introduce el lado 2 del triángulo:</label>
            <input type="number" name="lado2" id="lado2" required>
            <br><br>
            <label for="lado3">Introduce el lado 3 del triángulo:</label>
            <input type="number" name="lado3" id="lado3" required>
        <?php } ?>

        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
