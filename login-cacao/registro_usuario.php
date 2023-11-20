<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
    <title>Document</title>
</head>
<body>

    <div class="container">
   
      <div class="login-content">
        <form action="" method="POST" class="formulario">
            <img src="img/avatar.svg">
            <h2 class="title">REGISTRAR USUARIOS</h2>
            <?php 
            include("modelo/conexion_bd.php");
            include("controlador/controlador_registrar_usuario.php");
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="nombres">
                    <label for="">Nombres</label>
                    <input type="text" name="nombres">
                </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="apellidos">
                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos">
                </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="usuario">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario">
                </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="clave">
                    <label for="">Contraseña</label>
                    <input type="text" name="clave">
                </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="cuenta">
                    
                    <a href="login.php">Salir</a>
                </div>
            </div>
            <input class="boton" type="submit" value="Registrar" name="registro">
         </form>
      </div>
   </div>

   




</body>
</html>