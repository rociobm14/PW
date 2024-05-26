<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/coleccion.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <?php
                $idImagen = $_GET['id'];
                print($idImagen);

            ?>
        </main>
     
        
        

        <?php include("./partials/footer.php") ?>
    </body>
</html>