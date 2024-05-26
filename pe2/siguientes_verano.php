<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/coleccion.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>
     
        <main id="colecciones_generales">
            <?php include("./partials/menu_colecciones.php") ?>

            <?php

                //Comprobar si el usuario que está activo ya ha enviado un comentario o no
                //Conexión a la BBDD
                $dsn = "mysql:host=localhost;dbname=dbrociobarragan_pw2324";
                $usuario= "pwrociobarragan";
                $password= "23rociobarragan24";
                try {
                    $conexion = new PDO( $dsn, $usuario, $password );
                    $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                } catch ( PDOException $e ) {
                    echo "<p>Conexión fallida: " . $e->getMessage() . "</p>";
                }

                $consultaSQL = "SELECT * FROM Imagenes WHERE epoca = 'verano'";
                $st = $conexion->prepare($consultaSQL);
                $st->execute();

                $imagenes = $st->fetchAll(PDO::FETCH_ASSOC);

                if($imagenes){

                    $imagenes = array_reverse($imagenes);

                    echo '<section id="obras">';
                    echo '<h2>Obras de arte siguientes de Verano</h2>';
                    echo '<section id="todas">';

                    foreach ($imagenes as $imagen){
                        echo '<article>';
                        echo '<figure>';
                        echo '<a href="obra1.php">';
                        echo '<img src="imagenes/' . $imagen['nombre'] . '" alt="obrasgeneral">';
                        echo '</a>';
                        echo '<figcaption>';
                        echo '<h3>' . $imagen['titulo'] . '</h3>';
                        echo '<p>Autor/a: <cite>' . $imagen['autor'] . '</cite></p>';
                        echo '<p>Fecha: <cite>' . $imagen['fecha'] . '</cite></p>';
                        echo '</figcaption>';
                        echo '</figure>';

                        if(isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo_usuario'] == 'administrador'){
                            echo '<a class="modificar" href="modificar_obra.php?id=' . $imagen['id'] . '">Modificar</a>';
                            echo '<a class="eliminar" href="eliminar_obra.php?id=' . $imagen['id'] . '">Eliminar</a>';
                        }
                        
                        echo '</article>';
                    }

                    echo '</section>';
                    echo '<section id="siguientes">';
                    echo '<nav>';
                    echo '<a href="coleccion_verano.php">Anterior</a>';
                    echo '</nav>';
                    echo '</section>';
                }

            ?>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>