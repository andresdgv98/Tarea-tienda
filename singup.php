<!-- Formulario de registro-->
<?php require 'partials/header.php' ?>
<link rel="stylesheet" href="assets/css/stylelogin.css">
  
  <body>
    
    <div class="login-box">
      <img src="assets/imagenes/logo2.png" class="avatar" alt="Avatar Image">
      <h1>Ingreso</h1>
      <form action="registro.php" method="POST">
        <!-- NAME INPUT -->
        <label for="nombre">Nombre y apellido</label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre y apellido">
        <!-- USERNAME INPUT -->
        <label for="email">Correo electronico</label>
        <input type="text" name="correo" placeholder="Ingrese su correo">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="clave" placeholder="Ingrese una contraseña">



        <input type="submit" name="registrar" value="Ingresar">
        <a href="login.php">¿Ya tienes una cuenta?</a>
      </form>
    </div>
    <?php
    ?>
  </body>
<?php require 'partials/footer.php' ?>