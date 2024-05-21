<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de alta exitosa</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/alta_exitosa.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>
        
        <main>
            <h2>¡Experiencia enviada correctamente!</h2>
            <?php
                echo '<p>Gracias por su dedicación ' . $_SESSION['usuario']['nombre'] . '</p>';
            ?>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>