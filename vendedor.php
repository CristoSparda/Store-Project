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
        <a  style="margin: 8px;" href="./inventario.php"><button class="btn"><img src="./icons/arrow-left.svg" alt="">Regresar</button></a>
        <li class="nav-item">
            <a class="nav-link" href="inventario.php">Inventario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./gerencia.php">Administración</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Agrega productos</a>
        </li>

        <input class="busqueda" type="text" placeholder="Busca un producto" id="buscador">
    </ul>
    <div class="contenedor">
        <div class="categoriaLateral">

            <!-- Categorias en el menu lateral -->
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Comidas
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
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
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Bebidas
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
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
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseLimp" aria-expanded="false" aria-controls="panelsStayOpen-collapseLimp">
                        Limpieza
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseLimp" class="accordion-collapse collapse">
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
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseAbarr" aria-expanded="false" aria-controls="panelsStayOpen-collapseAbarr">
                        Abarrotes
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseAbarr" class="accordion-collapse collapse">
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
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseBotana" aria-expanded="false" aria-controls="panelsStayOpen-collapseBotana">
                        Botanas
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseBotana" class="accordion-collapse collapse">
                        watefok
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>
</html>
<script>
    // función para el buscador 
    let buscador = document.getElementById('buscador');

    buscador.addEventListener('input', function(event){
        console.log(event);
    });

</script>