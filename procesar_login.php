<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT usuarios.*, roles.nombre_rol FROM usuarios 
            JOIN roles ON usuarios.id_rol = roles.id_rol 
            WHERE email = :email AND password = :password";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email, 'password' => $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['usuario'] = $user['nombre'];
        $_SESSION['rol'] = $user['nombre_rol'];
        if ($user['nombre_rol'] == 'Administrador') {
            header("Location: dashboard_admin.php");
            exit();
        } else {
            header("Location: seccion_usuario.php");
            exit();
        }
    } else {
        echo "<script>alert('Correo o contraseña incorrectos'); window.location='login.php';</script>";
    }
}
?>