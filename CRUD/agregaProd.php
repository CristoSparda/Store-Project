<?php 

?>
<html lang="en">
<head>
    <link href="../style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <form class="contenedor" action="../logic/insertaProducto.php" method="POST" enctype="multipart/form-data" >
        <div class="col" style="">
            <a href="../inventario.php" style="margin-top: 16px;"><button>Regresar</button></a>
            <h1>Agrega un producto</h1>
            <img src="" class="entrada" id="ImagenProducto" alt="">
            <input id="imagen" type="file" name="imagen">
        </div>
        <div class="col" style="justify-content: center;">
            <span>Ingresar nombre</span>
            <input type="text" name="nombre">
            <span>Ingresar ID</span>
            <input type="number" name="id">
            <span>Ingresar categoria</span>
            <input type="text" name="categoria">
        </div>
        <div class="col" style="justify-content: center;">
            <span>Ingresar Precio</span>
            <input type="text" name="precio">
            <span>Cantidad a ingresar</span>
            <input type="number" name="cantidad">
            <div class="row">
                <button type="submit">Ingresar</button>
                <button type="button">Cancelar</button>
            </div>
        </div>

    </form>
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