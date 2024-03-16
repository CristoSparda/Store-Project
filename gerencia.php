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
     
    //consultar mediante la variable conexion
    //Bebidas
    $consultaBebidas = "SELECT * FROM productos WHERE categoria='bebidas'";

    $queryBebidas = mysqli_query($conexion, $consultaBebidas);
    //Comida
    $consultaComida = "SELECT * FROM productos WHERE categoria='comida'";

    $queryComida = mysqli_query($conexion, $consultaComida);
    //Botana
    $consultaBotana = "SELECT * FROM productos WHERE categoria='botanas'";

    $queryBotana = mysqli_query($conexion, $consultaBotana);
    //Limpieza
    $consultaLimpieza = "SELECT * FROM productos WHERE categoria='limpieza'";

    $queryLimpieza = mysqli_query($conexion, $consultaLimpieza);
    //Abarrotes
    $consultaAbarrotes = "SELECT * FROM productos WHERE categoria='abarrotes'";

    $queryAbarrotes = mysqli_query($conexion, $consultaAbarrotes);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Administrador</title>
    
	<link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
        <div class="contenedor" id="bebidas" style="flex-direction: column; padding: 16px;">
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
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>
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