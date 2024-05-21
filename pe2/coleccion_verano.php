<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte verano</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/coleccion.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main id="colecciones_generales">
            <?php include("./partials/menu_colecciones.php") ?>
           
            <section id="obras">
                <h2>Obras de arte de Verano</h2>

                <section id="todas">
                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image6.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Corona de corales</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2021-12-14">Fecha: <cite>14-12-2021</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image9.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Melena vibrante rosácea</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2023-06-01">Fecha: <cite>01-06-2023</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image16.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Escondite floral</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2021-09-11">Fecha: <cite>11-09-2021</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image21.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>La belleza de las Alpacas</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2022-01-15">Fecha: <cite>15-01-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image23.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Ensueño de atardecer</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2022-08-22">Fecha: <cite>22-08-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image24.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Faro veraniego</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2022-06-20">Fecha: <cite>20-06-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image26.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Susurros de la noche</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2022-03-17">Fecha: <cite>17-03-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image28.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>La tranquilidad de las olas</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2021-07-09">Fecha: <cite>09-07-2021</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image29.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>La alegría de la pradera</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2020-04-25">Fecha: <cite>25-04-2020</cite></time>
                            </figcaption>
                        </figure> 
                    </article>
                </section>

                <section id="siguientes">
                    <nav>
                        <a href="siguientes_verano.php">Siguiente</a>
                    </nav>
                </section>
            </section>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>