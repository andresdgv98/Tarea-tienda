
<?php require 'partials/header.php' ?>
<?php 
    include('database.php');

    insertar($conexion);
    

    function insertar($conexion){
        $mensaje = '';
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];

        $consulta = "INSERT INTO usuarios(nombre,correo,clave)
        VALUES ('$nombre','$correo','$clave')";
        
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
    }  
    echo '<br>
    <br>
    <br>
    <br>
    <div class="alerta"> Usuario registrado exitosamente, ya puede<a href="/php-login/login.php">iniciar sesion</a> </div>';

?>
<link rel="stylesheet" href="assets/css/style.css">
<?php require 'partials/footer.php' ?>


