<?php 
    

?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,  initial-scale=1.0">
        <title>Login</title>
        
        <link href="style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>


    <body>
        <div class="contenedor">
            <div class="col" style="width: 40%">
                <img class="loginImage" src="/Images/loginImage.jpg" alt="">
            </div>
            <div class="col" style="width: 60%; padding: 16px;">
                <h1>Iniciar Sesión</h1>
                <form id="loginForm" class="d-flex" FORM="POST" style="flex-direction: column; gap: 8px;">
                    <label for="">Correo/Nombre</label>
                    <input type="text" name="name" placeholder="nombre">
                    <label for="">Contraseña</label>
                    <input type="text" name="password" placeholder="password">
                    <button>Ingresar</button>
                </form>
            </div>
        </div>
        <a href="vendedor.html"><button>Pagina de Ventas</button></a>
        <a href="inventario.html"><button>Inventario</button></a>
        <a href="inventario.html"><button>Agregar Producto</button></a>
    </body>
</html>
<script>

</script>