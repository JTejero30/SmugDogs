<?php
require_once('Database.php');
class Database
{

    public static function conectarBD($driver, $db, $host, $port, $user, $password)
    {

        $dsn = "$driver:dbname=$db;host=$host;port=$port";

        try {
            // La variable $gbd tiene toda la configuracion de la conexion
            $gbd = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $gbd;
    }

    public static function mostrarCards($gbd, $query)
    {

        $resulset = $gbd->query($query);

        foreach ($resulset as $row) {
            echo '<div class="card">';
            echo '<img class=card-img-top src="img/' . $row['img'] . '.png" alt="">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title nombreProducto">'. $row['nombreProducto'] .'</h5>';
            echo '<p class="card-text descripcionProducto">'. $row['descripcion'] .'</p>';
            echo '<div class="tallaprecio">';
            echo '<div class="col dropup">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Talla
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">S</a></li>
                    <li><a class="dropdown-item" href="#">M</a></li>
                    <li><a class="dropdown-item" href="#">L</a></li>
                </ul>
            </div>';
            echo '<p class="precioProducto">' . $row['precio'] . '€</p>';
            echo '</div>'; 
            echo '</div>';   
            echo '<p class="d-none tipo">' . $row['tipo'] . '</p>';
            echo '</div>';
        }
    }
}
