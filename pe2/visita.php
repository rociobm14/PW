<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de visita</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/visita.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <figure>
                <h2>Plano del museo</h2>
                <img src="imagenes/image.png" alt="planomuseo">
            </figure>
            
            <section class="sala">
                <h2>Sala de pinturas modernas</h2>
                <p>Esta sala alberga una amplia colección de pinturas 
                    modernas de artistas reconocidos a nivel mundial. 
                    Aquí podrás apreciar la evolución del arte moderno a través de las décadas.
                </p>
            </section>
            
            <section class="sala">
                <h2>Sala de pinturas abstractas</h2>
                <p>La sala de pinturas abstractas presenta obras que se alejan de la representación 
                    literal de la realidad. Prepárate para sumergirte en un mundo de formas, colores 
                    y líneas que desafían la percepción.
                </p>
            </section>
            
            <section class="sala">
                <h2>Sala de esculturas</h2>
                <p>En nuestra sala de esculturas, encontrarás impresionantes obras tridimensionales de 
                    diversos materiales.
                </p>
            </section>
            
            <section class="sala">
                <h2>Sala de dibujo libre</h2>
                <p>La sala de dibujo libre es un espacio interactivo donde los visitantes pueden expresar 
                    su creatividad. Ofrecemos materiales de dibujo para que puedas crear tu propia obra de arte.
                </p>
            </section> 
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>