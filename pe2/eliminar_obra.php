<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/alta_exitosa.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <?php
                #cogemos el id de la imagen, pasado por la URL
                $idImagen = $_GET['id'];
                $nombre_imagen = $_GET['nombre'];

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

                $consultaSQL = "DELETE FROM Imagenes WHERE id = :id";

                try{
                    $stmt = $conexion->prepare($consultaSQL);
                    $stmt->bindValue(':id', $idImagen);

                    $stmt->execute();

                    echo '<h2>La obra ' . $nombre_imagen . ' ha sido eliminada correctamente';
                }catch ( PDOException $e ) { echo "<p>No se ha podido eliminar la obra: <p>" . $e->getMessage(); }
            ?>
        </main>
     
        
        

        <?php include("./partials/footer.php") ?>
    </body>
</html>