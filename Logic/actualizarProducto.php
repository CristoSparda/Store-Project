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

    $imagen = $_POST['nombreAnterior'];
    var_dump($imagen);

    if ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
        // Se ha subido una nueva imagen
        $nombreImagen = $_FILES["imagen"]["name"];
        $rutaImagen = $_FILES["imagen"]["tmp_name"];

        $infoImagenNueva = var_export($_FILES, true);
        echo "Imagen nueva: " . $infoImagenNueva . "<br>";
        
        //Codigo sql para hacer el update
        $update = "UPDATE productos SET nombre='" . $nombre ."', precio=" . $precio .  ", Cantidad=" . $cantidad . ",imagen='" . $nombreImagen . "' WHERE id=" . $id;
        var_dump($update);
        try{
            mysqli_query($conexion, $update);
            move_uploaded_file($rutaImagen, "../Images/" . $nombreImagen);
            header("Location: http://localhost/store-project/inventario.php");
        }catch(Exception $e){
            header("Location: http://localhost/store-project/inventario.php?error=" . $e->getMessage());
        }


    } else {
        // No se ha subido una nueva imagen, usar la imagen antigua
        echo "Imagen vieja: " . var_dump($imagen) . "<br>";
        //Codigo sql para hacer el update
        $update = "UPDATE productos SET nombre='" . $nombre ."', precio=" . $precio .  ", Cantidad=" . $cantidad . ",imagen='" . $imagen . "' WHERE id=" . $id;
        var_dump($update);
        try{
            mysqli_query($conexion, $update);
            header("Location: http://localhost/store-project/inventario.php");
        }catch(Exception $e){
            header("Location: http://localhost/store-project/inventario.php?error=" . $e->getMessage());
        }
    }
?>