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
    <form class="contenedor" action="../logic/insertaProducto.php" method="POST" enctype="multipart/form-data" >
        <a  style="margin: 8px;" href="../inventario.php"><button class="btn"><img src="../icons/arrow-left.svg" alt="">Regresar</button></a>
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
            <span>Ingresar ID</span>
            <input class="texto" type="number" name="id">
            <br>
            <div class="dropdown" name="categoria">
                <button class="btn btn-succes dropdown-toggle" type="button" data-bs-toggle="dropdown" >
                    Seleccionar categorias
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" value="Bebidas">Bebidas</a></li>
                    <li><a class="dropdown-item" href="#" value="Comida">Comida</a></li>
                    <li><a class="dropdown-item" href="#" value="Botanas">Botanas</a></li>
                    <li><a class="dropdown-item" href="#" value="Limpieza">Limpieza</a></li>
                    <li><a class="dropdown-item" href="#" value="Abarrotes">Abarrotes</a></li>
                </ul>
            </div>
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