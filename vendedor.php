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

   //consultar mediante la variable conexion
   //Bebidas
   $consultaBebidas = "SELECT * FROM productos WHERE categoria='bebidas'";

   $queryBebidas = mysqli_query($conexion, $consultaBebidas);
   //Comida
   $consultaComida = "SELECT * FROM productos WHERE categoria='comida'";

   $queryComida = mysqli_query($conexion, $consultaComida);
   //Botana
   $consultaBotana = "SELECT * FROM productos WHERE categoria='botana'";

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
    <title>Vendedor</title>
    
	<link href="style.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<body>
    <ul class="nav nav-tabs">
        <a  style="margin: 8px;" href="./inventario.php"><button class="btn"><img src="../icons/arrow-left.svg" alt="">Regresar</button></a>
        <li class="nav-item">
            <a class="nav-link" href="inventario.php">Inventario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./gerencia.php">Administración</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Agrega productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
    <div class="contenedor">
        <div class="categoriaLateral">

            <!-- Categorias en el menu lateral -->
    
            <div class="accordion row">
                <button class="Drop" id="dropComida">
                    <h2>Comida</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseComida">
                <div class="rowInventario">
                    <!-- ciclo para mostrar solo la categoria comida  -->
                    <?php 
                        while ($row = mysqli_fetch_array($queryComida)){
                    ?>
                        <div class="contenedorProducto">
                            <img class="imagenCategoria" src="./images/<?php echo $row["imagen"] ?>" alt="">
                            <span class="nombre"><?php echo $row["nombre"]; ?></span>
                            <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                            <span style="<?php echo ($row['Cantidad'] < 1) ? 'color: red;' : ''; ?>">Disponibles: <?php echo $row['Cantidad']; ?></span>
                        </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
    
            <div class="accordion row">
                <button class="Drop" id="dropBebida">
                    <h2>Bebidas</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseBebida">
                <div class="rowInventario">
                    <!-- ciclo para mostrar solo la categoria bebidas  -->
                    <?php 
                        while ($row = mysqli_fetch_array($queryBebidas)){
                    ?>
                        <div class="contenedorProducto">
                            <img class="imagenCategoria" src="./images/<?php echo $row["imagen"] ?>" alt="">
                            <span class="nombre"><?php echo $row["nombre"]; ?></span>
                            <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                            <span style="<?php echo ($row['Cantidad'] < 1) ? 'color: red;' : ''; ?>">Disponibles: <?php echo $row['Cantidad']; ?></span>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
    
            <div class="accordion row">
                <button class="Drop" id="dropLimpieza">
                    <h2>Limpieza</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseLimpieza">
                <div class="rowInventario">
                    <!-- ciclo para mostrar solo la categoria limpieza -->
                    <?php 
                    while ($row = mysqli_fetch_array($queryLimpieza)){
                    ?>
                        <div class="contenedorProducto">
                            <img class="imagenCategoria" src="./images/<?php echo $row["imagen"] ?>" alt="">
                            <span class="nombre"><?php echo $row["nombre"]; ?></span>
                            <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                            <span style="<?php echo ($row['Cantidad'] < 1) ? 'color: red;' : ''; ?>">Disponibles: <?php echo $row['Cantidad']; ?></span>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
    
            <div class="accordion row">
                <button class="Drop" id="dropAbarrotes">
                    <h2>Abarrotes</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseAbarrotes">
                <div class="rowInventario">
                    <!-- ciclo para mostrar solo la categoria abarrotes  -->
                    <?php 
                        while ($row = mysqli_fetch_array($queryAbarrotes)){
                    ?>
                        <div class="contenedorProducto">
                            <img class="imagenCategoria" src="./images/<?php echo $row["imagen"] ?>" alt="">
                            <span class="nombre">Id: <?php echo $row["id"]; ?></span>
                            <span class="nombre"><?php echo $row["nombre"]; ?></span>
                            <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                            <span style="<?php echo ($row['Cantidad'] < 1) ? 'color: red;' : ''; ?>">Disponibles: <?php echo $row['Cantidad']; ?></span>
                        </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>

            <div class="accordion row">
                <button class="Drop" id="dropBotana">
                    <h2>Botana</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseBotana">
                <div class="rowInventario">
                    <!-- ciclo para mostrar solo la categoria Botana  -->
                    <?php 
                        while ($row = mysqli_fetch_array($queryBotana)){
                    ?>
                        <div class="contenedorProducto">
                            <img class="imagenCategoria" src="./images/<?php echo $row["imagen"] ?>" alt="">
                            <span class="nombre">Id: <?php echo $row["id"]; ?></span>
                            <span class="nombre"><?php echo $row["nombre"]; ?></span>
                            <span class="nombre">Precio: <?php echo $row["precio"]; ?></span>
                            <span style="<?php echo ($row['Cantidad'] < 1) ? 'color: red;' : ''; ?>">Disponibles: <?php echo $row['Cantidad']; ?></span>
                        </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
    
        </div>
    
        <div class="contenedorVenta">
            <?php 
                if(isset($_GET['error'])){
                    echo "<span style='color: white; background-color: red; padding: 8px; border-radius: 8px;'> " . $_GET['error'] . "</span>";
                }
            ?>
            <div class="row" style="height: 10%; display: flex; align-content: center;">
                <h2 style="display: flex; justify-content:center;">Cuenta #3</h2>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Producto</h4>
                </div>
                <div class="col">
                    <h4>Cantidad</h4>
                </div>
                <div class="col">
                    <h4>Total</h4>
                </div>
            </div>
            <!-- Aqui van a estar los productos que se van agregando -->
            <div class="row">
                <div class="col">
                    <span>Fanta</span>
                </div>
                <div class="col">
                    <span>3</span>
                </div>
                <div class="col" style="width: 70%;">
                    <span>74</span>
                </div>
            </div>
            <!-- barra inferior para obtener el total de la venta -->
            <div class="rowTotal">
                <div class="col" style="display:fleX;justify-content: center;">
                    <h3>Total de la venta:</h3>
                </div>
                <div class="col" style="display:fleX;justify-content: center;">
                    <h2>20</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>

    //función para ocultar la categoria de comida 
    comidaBoton = document.getElementById("dropComida");

    comidaCont = document.getElementById("collapseComida");

    comidaBoton.addEventListener("click", function(){
        if( comidaCont.style.display == "none" ){
            comidaCont.style.display = "flex";
        }else {
            comidaCont.style.display = "none";
        }
    });

    //función para ocultar la categoria de bebidas
    bebidasBoton = document.getElementById("dropBebida");

    bebidasCont = document.getElementById("collapseBebida");

    bebidasBoton.addEventListener("click", function(){
        if( bebidasCont.style.display == "none" ){
            bebidasCont.style.display = "flex";
        }else {
            bebidasCont.style.display = "none";
        }
    });

    //función para ocultar la categoria de Limpieza
    LimpiezaBoton = document.getElementById("dropLimpieza");

    LimpiezaCont = document.getElementById("collapseLimpieza");

    LimpiezaBoton.addEventListener("click", function(){
        if( LimpiezaCont.style.display == "none" ){
            LimpiezaCont.style.display = "flex";
        }else {
            LimpiezaCont.style.display = "none";
        }
    });

    //función para ocultar la categoria de abarrotes
    AbarrotesBoton = document.getElementById("dropAbarrotes");

    AbarrotesCont = document.getElementById("collapseAbarrotes");

    AbarrotesBoton.addEventListener("click", function(){
        if( AbarrotesCont.style.display == "none" ){
            AbarrotesCont.style.display = "flex";
        }else {
            AbarrotesCont.style.display = "none";
        }
    });

    
    //función para ocultar la categoria de Botana
    BotanaBoton = document.getElementById("dropBotana");

    BotanaCont = document.getElementById("collapseBotana");

    BotanaBoton.addEventListener("click", function(){
        if( BotanaCont.style.display == "none" ){
            BotanaCont.style.display = "flex";
        }else {
            BotanaCont.style.display = "none";
        }
    });

</script>