<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'Administrador') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
    <nav class="navbar navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">Panel Admin - Biblioteca</a>
        <div class="d-flex align-items-center gap-3">
            <span class="text-white">Admin: <strong><?php echo $_SESSION['usuario']; ?></strong></span>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">Cerrar Sesión</a>
        </div>
    </nav>

    <div class="container my-5">
        <h2>Dashboard de Administración</h2>
        <p class="text-muted">Panel de control principal del sistema.</p>
        <hr>
        <div class="card p-4 shadow-sm mt-4">
            <h4>Sección de Artículos / Libros</h4>
            <p class="text-secondary">Espacio reservado para la administración del catálogo.</p>
            <button class="btn btn-primary btn-sm w-25" disabled>Agregar Nuevo Artículo (Próximamente)</button>
        </div>
    </div>
</body>
</html>