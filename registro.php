<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="/CSS/stylesesion.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
</head>
<body>
  <header>
    <a href="index.html" class="logo">
      <img src="img/nextgenlogosinfondo.png" />NEXTGEN HOME
    </a>
    <div class="sesion">
      <a href="indexsesion.php" class="Sesión-botón">Iniciar Sesión</a>
      <i class="ri-moon-clear-fill" id="darkmode"></i>
    </div>
  </header>
  <main class="main-bg">
    <script src="/js/app.js"></script>
    <div class="iniciosesion">
        <h1>Registro de Usuario</h1>
        <form method="post" action="register.php">
            <div class="usuario">
                <input type="text" id="nombres" class="input" name="nombres" autocomplete="off" required>
                <label>Nombres</label>
            </div>
            <div class="usuario">
                <input type="text" id="apellidos" class="input" name="apellidos" autocomplete="off" required>
                <label>Apellidos</label>
            </div>
            <div class="usuario">
                <input type="text" id="cedula" class="input" name="cedula" autocomplete="off" required>
                <label>Cédula</label>
            </div>
            <div class="usuario">
                <input type="date" id="fecha_nacimiento" class="input" name="fecha_nacimiento" required>
                <label>Fecha de Nacimiento</label>
            </div>
            <div class="usuario">
                <input type="email" id="correo" class="input" name="correo" autocomplete="off" required>
                <label>Correo Electrónico</label>
            </div>
            <div class="usuario">
                <input type="text" id="usuario" class="input" name="usuario" autocomplete="off" required>
                <label>Nombre de Usuario</label>
            </div>
            <div class="usuario">
                <input type="password" id="password" class="input" name="password" autocomplete="off" required>
                <label>Contraseña</label>
                <i class="ri-eye-off-line" id="togglePassword"></i>
            </div>
            <div class="usuario">
                <input type="password" id="confirm_password" class="input" name="confirm_password" autocomplete="off" required>
                <label>Confirmar Contraseña</label>
                <i class="ri-eye-off-line" id="toggleConfirmPassword"></i>
            </div>
            <input type="submit" value="Registrarse" name="botonregistro" class="btn">
            <div class="registro">
              ¿Ya tienes una cuenta? <a href="indexsesion.php">Iniciar Sesión</a>
            </div>
        </form>   
    </div>
  </main>
  <script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        let passwordInput = document.getElementById('password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.classList.replace('ri-eye-off-line', 'ri-eye-line');
        } else {
            passwordInput.type = 'password';
            this.classList.replace('ri-eye-line', 'ri-eye-off-line');
        }
    });
    document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
        let confirmPasswordInput = document.getElementById('confirm_password');
        if (confirmPasswordInput.type === 'password') {
            confirmPasswordInput.type = 'text';
            this.classList.replace('ri-eye-off-line', 'ri-eye-line');
        } else {
            confirmPasswordInput.type = 'password';
            this.classList.replace('ri-eye-line', 'ri-eye-off-line');
        }
    });
  </script>
</body>
</html>
