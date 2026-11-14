<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'Usuario') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Cuenta - Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center py-5">
    <div class="container mt-5">
        <div class="card shadow p-5 mx-auto" style="max-width: 500px;">
            <h2>¡Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
            <p class="text-muted mt-2">Esta es tu sección personal de usuario en la biblioteca virtual.</p>
            <a href="logout.php" class="btn btn-outline-dark mt-3">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>