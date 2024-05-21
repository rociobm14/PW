<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Obra 3</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/obra.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <figure>
                <img src="imagenes/image9.jpeg" alt="obrasgeneral">
            </figure> 

            <section id="contenedor">
                <section id="ficha_tecnica">
                    <h2>Ficha técnica</h2>
                    <p>Título: <cite>Melena vibrante rosácea</cite></p>
                    <p>Autor: <cite>Noah BE</cite></p>
                    <time datetime="2023-06-01">Fecha: <cite>01-06-2023</cite></time>
                    <p>Descripción: <cite>Esta pintura retrata a una chica con un vibrante
                       cabello rosa y ojos verdes esmeralda. Su mirada es intensa y cautivadora, 
                       y su cabello rosa añade un toque de misterio y encanto.</cite>
                    </p>
                </section>
                <aside>
                    <h2>Otras obras de interés</h2>
                    <nav>
                        <a href="obra2.php">Corona de corales</a>
                        <a href="obra1.php">La alegría de la pradera</a>
                        <a href="obra4.php">El pío de la mañana</a>
                    </nav>
                </aside>
            </section>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>