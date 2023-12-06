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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar producto</title>
    <style>

        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            margin: auto;

        }

        form *{
            margin-bottom: 8px;
        }

    </style>
</head>
<body>
    <a href="./inventario.php"><button>Regresar</button></a>
    <h2 style="text-align:center;">Editar Producto</h2>
    <form action="./logic/actualizarProducto.php" method="POST">
        <label for="">Ingresar Id:</label>
        <input type="number" name="id" id="identificador" value="<?php echo $producto['id'] ?>" readonly>

        <label for="">Ingresar Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $producto['nombre'] ?>">

        <label for="">Ingresar Precio:</label>
        <input type="number" name="precio" id="precio" value="<?php echo $producto['precio'] ?>">
        <button type="submit">Actualizar</button>

    </form>

</body>
</html>