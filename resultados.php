<?php
session_start();

require_once 'clases/Cuadrado.php';
require_once 'clases/Rectangulo.php';
require_once 'clases/Triangulo.php';
require_once 'clases/Circulo.php';

// Guardar los lados en la sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['lado1'] = $_POST['lado1'] ?? null;
    $_SESSION['lado2'] = $_POST['lado2'] ?? null;
    $_SESSION['lado3'] = $_POST['lado3'] ?? null;
}

$figura = $_SESSION['figura'];
$lado1 = $_SESSION['lado1'];
$lado2 = $_SESSION['lado2'] ?? null;
$lado3 = $_SESSION['lado3'] ?? null;

switch ($figura) {
    case 'cuadrado':
        $figuraObj = new Cuadrado($lado1);
        break;
    case 'rectangulo':
        $figuraObj = new Rectangulo($lado1, $lado2);
        break;
    case 'triangulo':
        $figuraObj = new Triangulo($lado1, $lado2, $lado3);
        break;
    case 'circulo':
        $figuraObj = new Circulo($lado1);
        break;
    default:
        die("Figura no válida.");
}

$area = $figuraObj->calcularArea();
$perimetro = $figuraObj->calcularPerimetro();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados</h1>
    <p><?php echo $figuraObj; ?></p>
    <p>Área: <?php echo $area; ?></p>
    <p>Perímetro: <?php echo $perimetro; ?></p>
    <a href="index.php">Volver a la página principal</a>
</body>
</html>
