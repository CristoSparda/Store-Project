<?php
    require "./conexion.php";

    if(!isset($_POST['id']) || !isset($_POST['nombre']) || !isset($_POST['precio'])){
        header("Location: http://localhost/Ejercicios%20Fundamentos%20Web/CRUD/enviodeDatos.php");
        return;
    }

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    //Codigo sql para hacer el update
    $update = "UPDATE productos SET nombre='" . $nombre ."', precio=" . $precio . " WHERE id=" . $id;

    
    try{
        mysqli_query($conexion, $update);
        header("Location: http://localhost/store-project/inventario.php");
    }catch(Exception $e){
        header("Location: http://localhost/store-project/inventario.php?error=" . $e->getMessage());
    }

?>