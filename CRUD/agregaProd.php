<?php 

?>
<html lang="en">
<head>
    <link href="../style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="nav nav-tabs">
        <a  style="margin: 8px;" href="../inventario.php"><button class="btn"><img src="../icons/arrow-left.svg" alt="">Regresar</button></a>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../vendedor.php">Venta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../inventario.php">Inventario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../gerencia.php">Administración</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Agrega productos</a>
        </li>
    </ul>
    <form class="contenedor" action="../logic/insertaProducto.php" method="POST" enctype="multipart/form-data" >
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <h1>Agrega un producto</h1>
            <br>
            <img src="" class="entrada" id="ImagenProducto" alt="">
            <label for="imagen">
                <img src="../Images/agregar.jpg" class="entrada" style="display: block;" id="imgPrevia">
            </label>
            <input id="imagen" type="file" name="imagen" style="display: none;">
        </div>
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <span>Ingresar nombre</span>
            <input class="texto" type="text" name="nombre">
            <br>
            <!-- <span>Ingresar ID</span>
            <input class="texto" type="number" name="id"> -->
            <br>
            <select class="texto form-select" id="categorias" name="categoria">
                <option selected="">Seleccionar categoria</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Comida">Comida</option>
                <option value="Botanas">Botanas</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Abarrotes">Abarrotes</option>
            </select>
            <!-- <span>Ingresar categoria</span>
            <input class="texto" type="text" name="categoria"> -->
        </div>
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <span>Ingresar Precio</span>
            <input class="texto" type="text" name="precio">
            <br>
            <span>Cantidad a ingresar</span>
            <input class="texto" type="number" name="cantidad">
            <br>
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary" type="submit">Ingresar</button>
                </div>
                <div class="col">
                    <button class="btn btn-danger" type="button">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Boostrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<script>

    let output = document.getElementById("ImagenProducto");
    let input = document.getElementById("imagen");
    let imgPrev = document.getElementById("imgPrevia");

    input.addEventListener("change", function(event){
        output.src = URL.createObjectURL(event.target.files[0]);
        input.style.display = "none";
        imgPrev.style.display = "none";
        output.style.display = "block";
    });

</script>