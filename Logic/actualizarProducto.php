<?php
    require "./conexion.php";

    var_dump($_POST);
    echo "<br>";

    if(!isset($_POST['id']) || !isset($_POST['nombre']) || !isset($_POST['precio'])){
        header("Location: http://localhost/Ejercicios%20Fundamentos%20Web/CRUD/enviodeDatos.php");
        return;
    }

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['Cantidad'];

    $imagen = $_POST['imagen'];

    if ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
        // Se ha subido una nueva imagen
        $nombreImagen = $_FILES["imagen"]["name"];
        $rutaImagen = $_FILES["imagen"]["tmp_name"];

        $infoImagenNueva = var_export($_FILES, true);
        echo "Imagen nueva: " . $infoImagenNueva . "<br>";
    } else {
        // No se ha subido una nueva imagen, usar la imagen antigua
        echo "Imagen vieja: " . var_dump($imagen) . "<br>";
    }
    //Codigo sql para hacer el update
    $update = "UPDATE productos SET nombre='" . $nombre ."', precio=" . $precio .  ", Cantidad=" . $cantidad ." WHERE id=" . $id;

    
    try{
        //si hay una imagen nueva guardarla
        if ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
            $rutaImagen = $_FILES["imagen"]["tmp_name"];
            $nombreImagen = $_FILES["imagen"]["name"];
            move_uploaded_file($rutaImagen, "../Images/" . $nombreImagen);
            //mysqli_query($conexion, $update);
        }
        
        header("Location: http://localhost/store-project/inventario.php");
    }catch(Exception $e){
        header("Location: http://localhost/store-project/inventario.php?error=" . $e->getMessage());
    }

?>