<?php 
if ($_POST){
    header("location: index.php"); 
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
        <h1>Bienvenid@ al sistema</h1>
        <div class="alert alert-primary" role="alert">
            <p>acceso concedido, puedes acceder al contenido de la pagina</p> 
        </div>
        <form action="" method="POST">
            <div class="col-12 text-end">
                <button  type="Submit" name="btnRegresar" id="btnRegresar" class="btn btn-primary" action="">Regresar</button>
            </div>
        </form>
        
    </main>
    
</body>
</html>