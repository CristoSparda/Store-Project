<?php 
    require "conexion.php";
    
    if( !isset($_POST['usuario']) || !isset($_POST['contraseña']) ){
        header("Location: http://localhost/store-project/index.php?error=No se pudo inciar sesión");
        return;
    }

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $consulta = "SELECT COUNT(*) as login, nombre, rol FROM usuarios WHERE nombre='" . $usuario ."' and contraseña='" . $contraseña . "'";
    
    //echo $consulta;

    $query = mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_array($query);

    if( $row['login'] > 0){
        //Login exitoso
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["rol"] = $row["rol"];
        if( $row["rol"] == "admin")
        {
            header("Location: http://localhost/store-project/gerencia.php"); 
        }
        else{
            header("Location: http://localhost/store-project/inventario.php"); 
        }
    }else{
        //Login fallido
        header("Location: http://localhost/Store-Project/index.php?error=Datos incorrectos");
    }

?>