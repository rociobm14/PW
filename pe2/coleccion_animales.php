<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte animales</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/coleccion.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main id="colecciones_generales">
            <?php include("./partials/menu_colecciones.php") ?>

            <section id="obras">
                <h2>Obras de arte de Animales</h2>

                <section id="todas">
                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image13.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>El pío de la mañana</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2022-07-21">Fecha: <cite>21-07-2022</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image14.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Amigo bigotudo</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2023-04-30">Fecha: <cite>30-04-2023</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image15.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Conejo de Pascua</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2022-04-18">Fecha: <cite>18-04-2022</cite></time>
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
                                <img src="imagenes/image18.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Jugando con las flores</h3>
                                <p>Autor: <cite>Noah BE</cite></p>
                                <time datetime="2023-05-31">Fecha: <cite>31-05-2023</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image19.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Rocky</h3>
                                <p>Autora: <cite>María BE</cite></p>
                                <time datetime="2021-10-12">Fecha: <cite>12-10-2021</cite></time>
                            </figcaption>
                        </figure> 
                    </article>

                    <article>
                        <figure>
                            <a href="obra1.php">
                                <img src="imagenes/image20.jpeg" alt="obrasgeneral">
                            </a>
                            <figcaption>
                                <h3>Melodía felina</h3>
                                <p>Autora: <cite>Eva BE</cite></p>
                                <time datetime="2023-03-29">Fecha: <cite>29-03-2023</cite></time>
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
                </section>

                <section id="siguientes">
                    <nav>
                        <a href="siguientes_animales.php"> Siguiente</a>
                    </nav>
                </section>
            </section>            
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>