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
            <figure>
                <img src="imagenes/image29.jpeg" alt="obrasgeneral">
            </figure> 

            <section id="contenedor">
                <section id="ficha_tecnica">
                    <h2>Ficha técnica</h2>
                    <p>Título: <cite>La alegría de la pradera</cite></p>
                    <p>Autor: <cite>Eva BE</cite></p>
                    <time datetime="2020-04-25">Fecha: <cite>25-04-2020</cite></time>
                    <p>Descripción: <cite>Esta obra de arte captura la belleza 
                        de una pradera en un día soleado. El cielo azul claro, salpicado 
                        de nubes esponjosas, se extiende sobre un campo verde y vibrante. 
                        La luz del sol baña la escena, creando un ambiente de tranquilidad y paz. 
                        Esta pintura fue creada durante la pandemia, sirviendo como un recordatorio 
                        de la belleza persistente de la naturaleza en tiempos de incertidumbre.</cite>
                    </p>
                </section>
                <aside>
                    <h2>Otras obras de interés</h2>
                    <nav>
                        <a href="obra2.php">Corona de corales</a>
                        <a href="obra3.php">Melena vibrante rosácea</a>
                        <a href="obra4.php">El pío de la mañana</a>
                    </nav>
                </aside>
            </section>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>