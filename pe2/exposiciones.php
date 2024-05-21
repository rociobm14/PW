<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de exposiciones</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/exposiciones.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>
  
        <main>
            <section id="exposiciones">
                <h1>Exposiciones temporales</h1>

                <article>
                    <figure>
                        <img src="imagenes/image11.jpeg" alt="exposicion figuras miniatura">
                        <figcaption>
                            <p>Autora: <cite>Julia RA</cite></p>
                            <p>Temática: <cite> Arte miniatura</cite></p>
                            <time datetime="2024-04-17">Fecha: <cite>17 Abril 2024 - 15 Mayo 2024</cite></time>
                        </figcaption>
                    </figure>
                    <section class="informacion">
                        <h2>Exposición de figuras miniatura</h2>
                        <p>Si eres fan de los objetos miniatura, esta es tu exposición.
                            En ella podrá apreciar las maravillosas obras de arte
                            en miniatura creadas por la gran artista Julia RA. Además, podrás 
                            llevarte obsequios personalizados.
                        </p>
                    </section>
                </article>

                <article>
                    <figure>
                        <img src="imagenes/image12.jpeg" alt="exposicion LEGO">
                        <figcaption>
                            <p>Autora: <cite>Kendal BR</cite></p>
                            <p>Temática: <cite>Arte en figuras de LEGO</cite></p>
                            <time datetime="2024-04-25">Fecha: <cite>25 Abril 2024 - 27 Mayo 2024</cite></time>
                        </figcaption>
                    </figure>

                    <section class="informacion">
                        <h2>Exposición de LEGO</h2>
                        <p>¿Eres amante de las figuras LEGO?, adéntrate en esta exposición y podrás
                            apreciar las figuras de LEGO sumergidas en el arte. Habrá también un taller
                            de construcción personalizado en el que, por tan solo 5€ más, podrás llevarte
                            todas tus creaciones. ¡No te lo pierdas!
                        </p>
                    </section>
                </article>

                <article>
                    <figure>
                        <img src="imagenes/image10.jpeg" alt="exposicion COOLMAN COFFEEDAN">
                        <figcaption>
                            <p>Autor: <cite>Danny Casale</cite></p>
                            <p>Temática: <cite>Arte digital</cite></p>
                            <time datetime="2024-04-18">Fecha: <cite>18 Abril 2024 - 3 Junio 2024</cite></time>
                        </figcaption>
                    </figure>

                    <section class="informacion">
                        <h2>Exposición COOLMAN COFFEEDAN</h2>
                        <p>Como invitado especial, hemos traído a Danny Casale y a su exposición acerca de 
                            sus creaciones digitales. Este artista es bastante conocido últimamente en redes
                            sociales debido a su moderno y maravilloso arte digital. En esta exposición podrás
                            apreciar figuras creadas a partir de su arte, y muchas sorpresas más. Podréis también
                            personalizar vuestras prendas de ropa con dibujos hechos a mano en directo por el artista.
                        </p>
                    </section>
                </article>
            </section> 
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>