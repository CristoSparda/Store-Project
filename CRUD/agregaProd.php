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
    <a href="../inventario.php"><button>Regresar</button></a>
    <form class="contenedor" action="../logic/insertaProducto.php" method="POST" enctype="multipart/form-data" >
        <div class="col">
            <h1>Agrega un producto</h1>
            <img src="" class="entrada" id="ImagenProducto" alt="">
            <input id="imagen" type="file" name="imagen">
        </div>
        <div class="col">
            <span>Ingresar nombre</span>
            <input type="text" name="nombre">
            <span>Ingresar ID</span>
            <input type="number" name="id">
            <span>Ingresar categoria</span>
            <input type="text" name="categoria">
        </div>
        <div class="col" style="flex-direction: column;">
            <span>Ingresar Precio</span>
            <input type="text" name="precio">
            <span>Cantidad a ingresar</span>
            <input type="number" name="cantidad">
            <button type="submit">Ingresar</button>
            <button type="button">Cancelar</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<script>

    let output = document.getElementById("ImagenProducto");
    let input = document.getElementById("imagen");

    input.addEventListener("change", function(event){
        output.src = URL.createObjectURL(event.target.files[0]);
        input.style.display = "none";
        output.style.display = "block";
    });

</script>