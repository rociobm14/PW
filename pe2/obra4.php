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
                <img src="imagenes/image13.jpeg" alt="obrasgeneral">
            </figure> 

            <section id="contenedor">
                <section id="ficha_tecnica">
                    <h2>Ficha técnica</h2>
                    <p>Título: <cite>El pío de la mañana</cite></p>
                    <p>Autor: <cite>María BE</cite></p>
                    <time datetime="2022-07-21">Fecha: <cite>21-07-2022</cite></time>
                    <p>Descripción: <cite>Esta pintura captura el encanto de una mañana temprana, 
                       con pájaros piando alegremente para saludar al nuevo día. Los pájaros, pintados 
                       con detalle exquisito, parecen cobrar vida en el lienzo. Sus cantos parecen casi 
                       audibles, creando una atmósfera de serenidad y alegría.</cite>
                    </p>
                </section>
                <aside>
                    <h2>Otras obras de interés</h2>
                    <nav>
                        <a href="obra2.php">Corona de corales</a>
                        <a href="obra3.php">Melena vibrante rosácea</a>
                        <a href="obra1.php">La alegría de la pradera</a>
                    </nav>
                </aside>
            </section>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>