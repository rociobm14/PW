<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Obra 1</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/obra.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>

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

                $consultaSQL = "SELECT * FROM Imagenes WHERE id = 26";
                $st = $conexion->prepare($consultaSQL);
                $st->execute();

                $imagen = $st->fetch(PDO::FETCH_ASSOC);

                echo '<figure>';
                echo '<img src="imagenes/' . $imagen['nombre'] . '" alt="obrasgeneral">';
                echo '</figure>';
                
                echo '<section id="contenedor">';
                echo '<section id="ficha_tecnica">';
                echo '<h2>Ficha técnica</h2>';
                echo '<p>Título: <cite>' . $imagen['titulo'] . '</cite></p>';
                echo '<p>Autor/a: <cite>' . $imagen['autor'] . '</cite></p>';
                echo '<p>Fecha: <cite>' . $imagen['fecha'] . '</cite></p>';
                echo '<p>Descripción: <cite>' . $imagen['descripcion'] . '</cite></p>';
                echo '</section>';

                echo '<aside>';
                echo '<h2>Otras obras de interés</h2>';
                echo '<nav>';
                echo '<a href="obra2.php">Corona de corales</a>';
                echo '<a href="obra3.php">Melena vibrante rosácea</a>';
                echo '<a href="obra4.php">El pío de la mañana</a>';
                echo '</nav>';
                echo '</aside>';

                echo '</section';

            ?>

        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>