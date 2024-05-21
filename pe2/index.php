<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de inicio</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/index.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <section id="bienvenida">
                <h1>¡Bienvenidos al Museo WildFemArte!</h1>
                <p> En este maravilloso lugar, encontraréis una colección
                    única de obras de arte contemporáneo, especialmente dedicadas a celebrar la belleza y 
                    la diversidad de las mujeres, los animales y los paisajes.<br>
                    Espero que disfruten.
                </p>
            </section>

            <section id="obrainvitada">
                <h4>LO MÁS DESTACADO ...</h4>
                <p id="autora"> María BE</p>
                <p id="diseños"> mujeres, animales, paisajes ...</p>
            </section>
        </main>
        
        <?php include("./partials/footer.php") ?>
    </body>
</html>