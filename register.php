<?php
include("conexion_bd.php");

if (isset($_POST['botonregistro'])) {
    $nombres = trim($_POST['nombres']);
    $apellidos = trim($_POST['apellidos']);
    $cedula = trim($_POST['cedula']);
    $fecha_nacimiento = trim($_POST['fecha_nacimiento']);
    $correo = trim($_POST['correo']);
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    
    if ($password !== $confirm_password) {
        echo "<script>alert('Las contraseñas no coinciden.'); window.history.back();</script>";
        exit();
    }

    // Verificar si el usuario o correo ya están registrados
    $check_query = "SELECT * FROM usuarios WHERE usuario = ? OR correo_electronico = ? OR cedula = ?";
    $stmt = $conexion->prepare($check_query);
    $stmt->bind_param("sss", $usuario, $correo, $cedula);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "<script>alert('El usuario, correo o cédula ya están registrados.'); window.history.back();</script>";
        exit();
    }
    
    // Insertar datos en la base de datos sin encriptar la contraseña
    $query = "INSERT INTO usuarios (nombres, apellidos, cedula, fecha_de_nacimiento, correo_electronico, usuario, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("sssssss", $nombres, $apellidos, $cedula, $fecha_nacimiento, $correo, $usuario, $password);
    
    if ($stmt->execute()) {
        echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location.href='indexsesion.php';</script>";
    } else {
        echo "<script>alert('Error en el registro. Inténtalo de nuevo.'); window.history.back();</script>";
    }
    
    $stmt->close();
    $conexion->close();
}
