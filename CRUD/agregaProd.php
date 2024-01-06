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
    <form id="agregaProducto" method="POST" class="contenedor">
        <div class="col">
            <h1>Agrega un producto</h1>
            <div class="entrada">
            </div>
                <input type="file" name="imagen" accept="image/*" >
            <span>Agregar una imagen git o un link</span>
        </div>
        <div class="col">
            <span>Ingresar nombre</span>
            <input type="text" name="nombre">
            <span>Ingresar categoria</span>
            <input type="text" name="categoria">
        </div>
        <div class="col">
            <span>Ingresar Precio</span>
            <input type="text" name="precio">
            <span>Cantidad a ingresar</span>
            <input type="number" name="cantidad">
            <button type="submit">Ingresar</button>
            <button type="button">Cancelar</button>
        </div>

    </form>
</body>
</html>