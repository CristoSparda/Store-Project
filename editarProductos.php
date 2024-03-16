<?php
    require "./logic/conexion.php";

    
    if( !isset($_GET['id']) ){
        header("Location: http://localhost/Ejercicios%20Fundamentos%20Web/CRUD/enviodeDatos.php?error=No se pudo editar el producto");
        return;
    }

    $id = $_GET["id"];
    $consulta = "SELECT * FROM productos WHERE id=" . $id;

    $query = mysqli_query($conexion, $consulta);
    $producto = mysqli_fetch_array($query);
    
    // var_dump($producto);
?>

<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <a href="./inventario.php"><button class="btn">Regresar</button></a>
    <h2 class="" style="text-align:center;">Editar Producto</h2>
    <form class="contenedor grid gap-0 column-gap-3 row-gap-3" action="./logic/actualizarProducto.php" method="POST">
        <div class="col d-flex flex-column align-items-end justify-content-center p-2 g-col-6">
            <div class="image-container">

                <img src="./images/<?php echo $producto["imagen"] ?>" class="entrada" style="display: block;" id="imgAnterior">
                <button id="botonEditar" class="btn editarIcon" style="border-radius: 50%;" type="button" onClic="opcionesImagen"> 
                    <img src="Icons/editar.svg" alt="">
                </button>

                <div id="opcionBotones" class="optImg">
                    <button class="btn" type="button">
                        Cambiar
                    </button>
                    <button class="btn" type="button">
                        Eliminar
                    </button>
                    <button class="btn" type="button">
                        Cancelar
                    </button>
                </div>
            </div>
            <label for="">Cambiar cantidad disponible:</label>
            <input type="number" name="id" id="identificador" value="<?php echo $producto['id'] ?>" style="display: none;">
            <input type="number" name="Cantidad" id="disponibles" value="<?php echo $producto['Cantidad'] ?>">
        </div>
        <div class="col d-flex flex-column align-items-start justify-content-center p-2 g-col-6">
            <label for="">Cambiar Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $producto['nombre'] ?>">

            <label for="">Cambiar Precio:</label> 
            <input type="number" name="precio" id="precio" value="<?php echo $producto['precio'] ?>">
            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>
<script>
    function opcionesImagen(){
        console.log("Esta entrando a la función");
        document.getElementById("opcionBotones").style.display = "flex 1important";
    }

    window.addEventListener("click", function(event){
        console.log(event.target);
    });
</script>
</html>