<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte otoño</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/coleccion.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main id="colecciones_generales">
            <?php include("./partials/menu_colecciones.php") ?>
           
            <section id="obras">
                <h2>Obras de arte de Otoño</h2>

                <section id="todas">
                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image0.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Mujer Libre</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2020-01-22">Fecha: <cite>22-01-2020</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image2.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Café otoñal</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2020-06-27">Fecha: <cite>27-06-2020</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image7.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Cielo en los ojos</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2022-11-25">Fecha: <cite>25-11-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image8.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Rubor en las mejillas</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2022-05-19">Fecha: <cite>19-05-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image17.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Nieve y compañía peluda</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2022-12-26">Fecha: <cite>26-12-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image22.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Llegada otoñal</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2022-10-24">Fecha: <cite>24-10-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image25.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Cielo morado</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2023-09-04">Fecha: <cite>04-09-2023</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image27.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>La nieve del anochecer</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2021-11-13">Fecha: <cite>13-11-2021</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image30.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Lluvia de estrellas</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2021-12-14">Fecha: <cite>14-12-2021</cite></time>
                            </figcaption>
                        </figure> 
                    </article>
                </section>

                <section id="siguientes">
                    <nav>
                        <a href="siguientes_otono.php">Siguiente</a>
                    </nav>
                </section>
            </section>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>