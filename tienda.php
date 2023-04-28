<?php
require_once('Database.php');
$bd = Database::conectarBD('mysql', 'smugDogs', 'localhost', '3306', 'root', '');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleTienda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="cabecera">
            <div class="imagentienda"></div>
            <h2 class="txtTienda">Shop</h2>
        </div>
        <div class="d-none d-md-flex barraBusqueda container justify-content-between">
            <div class="col dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Collares</a></li>
                    <li><a class="dropdown-item" href="#">Correas</a></li>
                    <li><a class="dropdown-item" href="#">Bolsas chuches</a></li>
                </ul>
            </div>
            <div class="col dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tamaño
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">S</a></li>
                    <li><a class="dropdown-item" href="#">M</a></li>
                    <li><a class="dropdown-item" href="#">L</a></li>
                </ul>
            </div>
            <form class="col" action="" style="display: flex; align-items: center; gap:8%;">
                <label for="color">Color</label>
                <input type="color" class="form-control form-control-color">
            </form>
            <div class="col dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ordenar por
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Más recientes</a></li>
                    <li><a class="dropdown-item" href="#">Más vendidos</a></li>
                    <li><a class="dropdown-item" href="#">Precio ascendente</a></li>
                </ul>
            </div>
            <input type="text" aria-label="Buscar productos" class="col form-control" placeholder="Buscar productos..." id="buscar">
        </div>
        <section class="container d-flex cardsProducto">
        
            <?php

            Database::mostrarCards($bd, 'select * from cardstienda');
            ?>

        </section>

</body>

</html>