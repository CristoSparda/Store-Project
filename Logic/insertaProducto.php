<?php 

    //crear el objeto de la colección
    require "./conexion.php";

    var_dump($_POST);
    //si se intenta acceder a la ruta o no se estan enviando los datos mediante el formulario
    //se reenviara al envio de datos pero no se inserta un producto
    if(!isset($_POST['id']) || !isset($_POST['nombre']) || !isset($_POST['precio']) || !isset($_POST['categoria']) || !isset($_POST['cantidad'])  ){
        header("Location: http://localhost/store-project/inventario.php");
        return;
    }

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];

    //forma de obtener una imagen o archivo
    $nombreImagen = $_FILES["imagen"]["name"];
    $rutaImagen = $_FILES["imagen"]["tmp_name"];
    
    $insert = "INSERT into productos (id, nombre, precio, categoria, imagen, Cantidad) VALUES(". $id .",'".$nombre ."', " .$precio ." , '" . $categoria . "', '". $nombreImagen ."', " . $cantidad . " )";

    // try{
    //     mysqli_query($conexion, $insert );
    //     move_uploaded_file($rutaImagen, "../Images/" . $nombreImagen);
    //     header("Location: http://localhost/store-project/inventario.php");
    // } catch (Exception $e){
    //     header("Location: http://localhost/store-project/inventario.php?error=" . $e->getMessage() );
    // }

    //echo $insert;

?>
