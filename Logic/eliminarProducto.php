<?php 
    require "./conexion.php";

    if( !isset($_GET['id']) ){
        header("Location: http://localhost/Ejercicios%20Fundamentos%20Web/CRUD/enviodeDatos.php?error=No se pudo eliminar el producto");
        return;
    }

    $id = $_GET['id'];

    $delete = "DELETE FROM productos WHERE id=" . $id;

    //echo $delete;

    
    try{
        mysqli_query($conexion, $delete);
        header("Location: http://localhost/store-project/inventario.php");
    }catch(Exception $e){
        header("Location: http://localhost/store-project/inventario.php?error=" . $e->getMessage());
    }

?>