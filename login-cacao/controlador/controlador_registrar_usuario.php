<?php 
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["usuario"]) or empty($_POST["clave"])) {
        echo '<div class="alert alert-danger">UNO DE LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $sql=$conexion->query(" insert into usuario(nombres,apellidos,usuario,clave) values('$nombres','$apellidos','$usuario','$clave') ");
        if ($sql==1) {
            echo '<div class="success">Usuario registrado exitoxamente</div>';
        } else {
            echo '<div class="alerta">Error al registrarse</div>';
        }
    
    }
}


?>