<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,  initial-scale=1.0">
        <title>Login</title>
        
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </head>


    <body>
        <div class="contenedor">
            <div class="col" style="width: 40%">
                <img class="loginImage" src="./Images/loginImage.jpg" alt="">
            </div>
            <div class="col" style="width: 60%; padding: 16px; justify-content:center;">
                <h1>Iniciar Sesión</h1>
                <form action="./logic/Login.php" class="d-flex" method="POST" style="flex-direction: column; gap: 8px;">
                    <label for="">Correo/Nombre</label>
                    <input type="text" name="usuario" placeholder="Ingresar Nombre">
                    <label for="">Contraseña</label>
                    <input type="password" name="contraseña" placeholder="Ingresar contraseña">
                    <button>Ingresar</button>
                    <?php 
                        if(isset($_GET['error'])){
                            echo "<span style='color: white; background-color: red; padding: 8px; border-radius: 8px;'> " . $_GET['error'] . "</span>";
                        }
                    ?>
                </form>
            </div>
        </div>
        
        <a href="vendedor.php"><button>Pagina de Ventas</button></a>
        <a href="inventario.php"><button>Inventario</button></a>
        <a href="./CRUD/agregaProd.php"><button>Agregar Producto</button></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    </body>
</html>
<script>

</script>