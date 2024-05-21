<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Obra 2</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/obra.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <figure>
                <img src="imagenes/image6.jpeg" alt="obrasgeneral">
            </figure> 

            <section id="contenedor">
                <section id="ficha_tecnica">
                    <h2>Ficha técnica</h2>
                    <p>Título: <cite>Corona de corales</cite></p>
                    <p>Autor: <cite>Noah BE</cite></p>
                    <time datetime="2021-12-14">Fecha: <cite>14-12-2021</cite></time>
                    <p>Descripción: <cite>Esta pintura presenta a una majestuosa sirena 
                        con el pelo azul como el océano. Su corona, hecha de brillantes corales, 
                        resalta contra su cabello, creando un contraste impresionante. La sirena 
                        parece estar en un estado de serenidad y gracia, su rostro refleja una 
                        calma profunda. Esta obra fue creada durante la pandemia, sirviendo como 
                        un escape a un mundo de fantasía y belleza submarina.</cite>
                    </p>
                </section>
                <aside>
                    <h2>Otras obras de interés</h2>
                    <nav>
                        <a href="obra1.php">La alegría de la pradera</a>
                        <a href="obra3.php">Melena vibrante rosácea</a>
                        <a href="obra4.php">El pío de la mañana</a>
                    </nav>
                </aside>
            </section>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>