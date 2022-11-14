<!--Conexión con la base de datos-->
<?php
    $conexion = mysqli_connect('localhost','root', '', 'php_login_database') 
    or die(mysqli_error($mysqli));
?>