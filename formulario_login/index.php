<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
$usuario=$_POST["txtUsuario"];
$pass=$_POST["txtPass"];

if($usuario && $pass){

header ("location: acceso-confirmado.php");
}else{
$mensaje="Valido para usuarios registrados";}

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <main class="container">
        <h1>Bienvenido</h1>
        <h3>Por favor ingrese sus credenciales</h3>
        <div class="row">

        <?php if(isset($mensaje)){ ?>
        <div class="alert alert-danger" role="alert"><?php echo $mensaje ?></div>
        <?php } ?>

                <form method="POST" action="">
                    <div class="mb-3 col-3">
                        <label for="txtUsuario" class="form-label">Usuario: </label>
                        <input type="text" class="form-control" require id="txtUsuario" name="txtUsuario">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="txtPass" class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" require id="txtPass" name="txtPass">
                    </div>
                    <div class="mb-3 form-check">
                    </div>
                    <button type="submit" name="btnIngresar" id="btnIngresar" class="btn btn-primary">Enviar</button>
        </form>
        </div>
    </main>
    
</body>
</html>