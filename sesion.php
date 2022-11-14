<!-- Funcion de inicio de sesion-->
<?php   
    session_start();
    include('database.php');

    if (isset($_POST['correo']) && isset($_POST['clave']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $correo = validate($_POST['correo']); 
    $clave = validate($_POST['clave']);

    if (empty($correo)) {
        header("Location: login.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($clave)) {
        header("Location: login.php?error=La clave Es Requerida");
        exit();
    }else{
        $Sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND clave='$clave'";
        $result = mysqli_query($conexion, $Sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['correo'] === $correo && $row['clave'] === $clave) {
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['ID'] = $row['ID'];
                header("Location: Inicio.php");
                exit();
            }else {
                header("Location: login.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: login.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: login.php");
            exit();
}
?>
