<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="/CSS/stylesesion.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
</head>
<body>
  <header>
    <a href="index.html" class="logo"
      ><img src="img/nextgenlogosinfondo.png" />NEXTGEN HOME
    </a>

 

    <div class="sesion">
      <a href="indexsesion.php" class="Sesión-botón">Iniciar Sesión </a>
      <i class="ri-moon-clear-fill" id="darkmode"></i>
    </div>
  </header>
  <main  class="main-bg">
      <script src="/js/app.js"></script>
    <div class="iniciosesion">
        <h1>Inicio de Sesión</h1>
        <form method="post">

        <?php
        include ("conexion_bd.php");
        include ("controlador.php");
        ?>
            <div class="usuario">
                <input type="text" id="usuario" class="input" name="usuario" autocomplete="off">
                <label>Nombre de usuario</label>
            </div> 
            <div class="usuario">
                <input type="password" id="input"  class= "input" name="password" autocomplete="off">
                <label>Contraseña</label>
            </div> 
            <div class="olvido">
                ¿Olvidó su usuario?
            </div> 
            <div class="olvido">
                ¿Olvidó su contraseña?
            </div> 
            <input type="submit" value="Iniciar Sesión" name="botoningresar" class="btn" >
            <div class="registro">
              <a href="registro.php">Registrarse</a>
            </div> 
            </form>   
    </div>
</main>
<script src="js/app.js"></script>
</body>
</html>