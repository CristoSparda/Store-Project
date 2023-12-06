<?php 
     require "./logic/conexion.php";
    
     session_Start();
 
     //revisa si se inicio sesión y si es un admin o no
     if( isset($_SESSION["usuario"]) && isset($_SESSION["rol"]) ){
         $user = $_SESSION["usuario"];
         $rol = $_SESSION["rol"];
     }else{
         header("Location: http://localhost/store-project/index.php");
         return;
     }

     if($rol != "admin"){
        header("Location: http://localhost/store-project/vendedor.php?error=Necesitas ser administrador para ingresar..." );
        return;
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Administrador</title>
    
	<link href="style.css" rel="stylesheet">

</head>


<body>
    <div class="contenedor" style="flex-wrap: nowrap;">
       
        <div class="menuLateral">
                <a href="./logic/logout.php"><button>Cerrar sesión</button></a>
                <h1>Categorias</h1>
                <br>
                <button id="botonBebidas"><h4>Bebidas</h4></button>
                <button id="botonComida"><h4>Comida</h4></button>
                <button id="botonBotanas"><h4>Botanas</h4></button>
                <button id="botonLimpieza"><h4>Limpieza</h4></button>
                <button id="botonAbarrotes"><h4>Abarrotes</h4></button>
            </div>  
        <div >
        <div class="contenedorCategoria" id="bebidas" style="flex-direction: column; padding: 16px;">
            <h2>Bebidas</h2>
            <div class="rowInventario">
                <!-- ciclo para mostrar solo la categoria bebidas  -->
                <?php 
                    while ($row = mysqli_fetch_array($queryBebidas)){
                ?>
                    <div class="card producto">
                        <img class="imgProducto" src="./images/<?php echo $row["imagen"] ?>" alt="">
                        <span class="nombre">Id: <?php echo $row["id"]; ?></span>
                        <span class="nombre">Producto: <?php echo $row["nombre"]; ?></span>
                        <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                        <button type="button" onclick="window.location.href='./logic/eliminarProducto.php?id=<?php echo $row['id'] ?>'">Eliminar</button>
                        <button type="button" onclick="window.location.href='./editarProductos.php?id=<?php echo $row['id'] ?>'">Actualizar</button>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="contenedor" id="botana" style="flex-direction: column; padding: 16px; display: none;">
            <h2>Botana</h2>
            <div class="rowInventario">
                <!-- ciclo para mostrar solo la categoria botana  -->
                <?php 
                    while ($row = mysqli_fetch_array($queryBotana)){
                ?>
                    <div class="card producto">
                        <img class="imgProducto" src="./images/<?php echo $row["imagen"] ?>" alt="">
                        <span class="nombre">Id: <?php echo $row["id"]; ?></span>
                        <span class="nombre">Producto: <?php echo $row["nombre"]; ?></span>
                        <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                        <button type="button" onclick="window.location.href='./logic/eliminarProducto.php?id=<?php echo $row['id'] ?>'">Eliminar</button>
                        <button type="button" onclick="window.location.href='./editarProductos.php?id=<?php echo $row['id'] ?>'">Actualizar</button>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="contenedor" id="comida" style="flex-direction: column; padding: 16px; display: none;">
            <h2>Comida</h2>
            <div class="rowInventario">
                <!-- ciclo para mostrar solo la categoria comida  -->
                <?php 
                    while ($row = mysqli_fetch_array($queryComida)){
                ?>
                    <div class="card producto">
                        <img class="imgProducto" src="./images/<?php echo $row["imagen"] ?>" alt="">
                        <span class="nombre">Id: <?php echo $row["id"]; ?></span>
                        <span class="nombre">Producto: <?php echo $row["nombre"]; ?></span>
                        <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                        <button type="button" onclick="window.location.href='./logic/eliminarProducto.php?id=<?php echo $row['id'] ?>'">Eliminar</button>
                        <button type="button" onclick="window.location.href='./editarProductos.php?id=<?php echo $row['id'] ?>'">Actualizar</button>
                    </div>
                <?php 
                }
                ?>

            </div>
        </div>
        <div class="contenedor" id="limpieza" style="flex-direction: column; padding: 16px; display: none;">
            <h2>Limpieza</h2>
            <div class="rowInventario">
                <!-- ciclo para mostrar solo la categoria limpieza -->
                <?php 
                while ($row = mysqli_fetch_array($queryLimpieza)){
                ?>
                    <div class="card producto">
                        <img class="imgProducto" src="./images/<?php echo $row["imagen"] ?>" alt="">
                        <span class="nombre">Id: <?php echo $row["id"]; ?></span>
                        <span class="nombre">Producto: <?php echo $row["nombre"]; ?></span>
                        <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                        <button type="button" onclick="window.location.href='./logic/eliminarProducto.php?id=<?php echo $row['id'] ?>'">Eliminar</button>
                        <button type="button" onclick="window.location.href='./editarProductos.php?id=<?php echo $row['id'] ?>'">Actualizar</button>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="contenedor" id="abarrotes" style="flex-direction: column; padding: 16px; display: none;">
            <h2>Abarrotes</h2>
            <div class="rowInventario">
                <!-- ciclo para mostrar solo la categoria abarrotes  -->
                <?php 
                    while ($row = mysqli_fetch_array($queryAbarrotes)){
                ?>
                    <div class="card producto">
                        <img class="imgProducto" src="./images/<?php echo $row["imagen"] ?>" alt="">
                        <span class="nombre">Id: <?php echo $row["id"]; ?></span>
                        <span class="nombre">Producto: <?php echo $row["nombre"]; ?></span>
                        <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                        <button type="button" onclick="window.location.href='./logic/eliminarProducto.php?id=<?php echo $row['id'] ?>'">Eliminar</button>
                        <button type="button" onclick="window.location.href='./editarProductos.php?id=<?php echo $row['id'] ?>'">Actualizar</button>
                    </div>
                <?php 
                }
                ?>
            </div>
        </div>
        <a href="./CRUD/agregaProd.php"><button clasS="botonAgregar">Agregar producto</button></a>
    </div>
</body>
</html>
<script>
    //Obtiene los botones
    let botonBebidas = document.getElementById('botonBebidas');
    let botonComida = document.getElementById('botonComida');
    let botonBotanas = document.getElementById('botonBotanas');
    let botonLimpieza = document.getElementById('botonLimpieza');
    let botonAbarrotes = document.getElementById('botonAbarrotes');

    //Obtiene las secciones
    let bebidas = document.getElementById('bebidas');
    let comida = document.getElementById('comida');
    let limpieza = document.getElementById('limpieza');
    let botanas = document.getElementById('botana');
    let abarrotes = document.getElementById('abarrotes');

    //Si se presiona el boton comida oculta el resto y muestra solo la seccion de comida
    botonComida.addEventListener('click', function(){
        //ocultar
        bebidas.style.display = "none";
        botanas.style.display = "none";
        limpieza.style.display = "none";
        abarrotes.style.display = "none";
        //mostrar
        comida.style.display = "flex";
    });
    
    //Si se presiona el boton comida oculta el resto y muestra solo la seccion de bebidas
    botonBebidas.addEventListener('click', function(){
        //ocultar
        comida.style.display = "none";
        botanas.style.display = "none";
        limpieza.style.display = "none";
        abarrotes.style.display = "none";
        //mostrar
        bebidas.style.display = "flex";
    });
    //Si se presiona el boton comida oculta el resto y muestra solo la seccion de limpieza
    botonLimpieza.addEventListener('click', function(){
        //ocultar
        bebidas.style.display = "none";
        botanas.style.display = "none";
        comida.style.display = "none";
        abarrotes.style.display = "none";
        //mostrar
        limpieza.style.display = "flex";
    });
    //Si se presiona el boton comida oculta el resto y muestra solo la seccion de Botanas
    botonBotanas.addEventListener('click', function(){
        //ocultar
        bebidas.style.display = "none";
        comida.style.display = "none";
        limpieza.style.display = "none";
        abarrotes.style.display = "none";
        //mostrar
        botanas.style.display = "flex";
    });
    //Si se presiona el boton comida oculta el resto y muestra solo la seccion de Abarrotes
    botonAbarrotes.addEventListener('click', function(){
        //ocultar
        bebidas.style.display = "none";
        botanas.style.display = "none";
        limpieza.style.display = "none";
        comida.style.display = "none";
        //mostrar
        abarrotes.style.display = "flex";
    });
</script>