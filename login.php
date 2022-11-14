
<!--Login-->
<?php require 'partials/header.php' ?>
<?php require 'database.php'; ?>
<link rel="stylesheet" href="assets/css/stylelogin.css">
  <body>
    
    <div class="login-box">
      <img src="assets/imagenes/logo2.png" class="avatar" alt="Avatar Image">
      <h1>Ingreso</h1>
        <?php
        if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php echo $_GET['error']?>   
            </p>
            <?php    
              }
            ?>
      <form action="sesion.php" method="POST">
        <!-- USERNAME INPUT -->
        <label for="username">Correo electronico</label>
        <input type="text" name= "correo" placeholder="Ingrese el correo">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name = "clave" placeholder="Ingrese la contraseña">
        <input type="submit" value="Ingresar">
        <a href="#">¿Olvidó su contraseña?</a><br>
        <a href="singup.php">¿No tiene una cuenta?</a>
      </form>
    </div>
  </body>
<?php require 'partials/footer.php' ?>