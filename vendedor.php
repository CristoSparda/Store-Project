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
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
                <div class="contenedorProducto row row-cols-2 row-cols-md-2 g-2">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
            </div>
    
            <div class="accordion row">
                <button class="Drop" id="dropBebida">
                    <h2>Bebidas</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseBebida">
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="https://i5.walmartimages.com.mx/gr/images/product-images/img_large/00750105530377L.jpg" alt="">
                    <span>Fanta</span>
                </div>
                <div class="contenedorProducto row row-cols-2 row-cols-md-2 g-2">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
            </div>
    
            <div class="accordion row">
                <button class="Drop" id="dropLimpieza">
                    <h2>Limpieza</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseLimpieza">
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
                <div class="contenedorProducto row row-cols-2 row-cols-md-2 g-2">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
            </div>
    
            <div class="accordion row">
                <button class="Drop" id="dropAbarrotes">
                    <h2>Abarrotes</h2>
                    <img src="Icons/arrowDown.svg" alt="" srcset="">
                </button>
            </div>
    
            <div class="contenedorCategoria" id="collapseAbarrotes">
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
                <div class="contenedorProducto row row-cols-2 row-cols-md-2 g-2">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
                <div class="contenedorProducto">
                    <img class="imagenCategoria" src="Images/eggg.jpeg" alt="">
                    <span>Huevo</span>
                </div>
            </div>
    
        </div>
    
        <div class="contenedorVenta">
            <div class="row">
                <h2>Cuenta</h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <h2>Fanta</h2>
                    </div>
                    <div class="row">
                        <span>Cantidad: 2</span>
                    </div>
                </div>
                <div class="col">
                    20.0 $
                </div>
                <div class="col">
                    Total
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

    //función para ocultar la categoria de bebidas
    AbarrotesBoton = document.getElementById("dropAbarrotes");

    AbarrotesCont = document.getElementById("collapseAbarrotes");

    AbarrotesBoton.addEventListener("click", function(){
        if( AbarrotesCont.style.display == "none" ){
            AbarrotesCont.style.display = "flex";
        }else {
            AbarrotesCont.style.display = "none";
        }
    });

</script>