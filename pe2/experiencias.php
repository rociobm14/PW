<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de Experiencias</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/experiencias.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <?php

                //Comprobar si el usuario que está activo ya ha enviado un comentario o no
                //Conexión a la BBDD
                $dsn = "mysql:host=localhost;dbname=dbrociobarragan_pw2324";
                $usuario= "pwrociobarragan";
                $password= "23rociobarragan24";
                try {
                    $conexion = new PDO( $dsn, $usuario, $password );
                    $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                } catch ( PDOException $e ) {
                    echo "<p>Conexión fallida: " . $e->getMessage() . "</p>";
                }

                if (isset($_SESSION['usuario'])){

                    $consultaSQL = "SELECT * FROM Experiencias WHERE dni = :dni";
                    $dni = $_SESSION['usuario']['dni'];
                    $st = $conexion->prepare($consultaSQL);
                    $st->bindValue(':dni', $dni);
                    $st->execute();

                    $experiencia_usuario = $st->fetch(PDO::FETCH_ASSOC);

                    //El usuario tiene una experiencia registrada ya, le mostramos su opinión en vez del form
                    if($st->rowCount()>0){
                        echo '<section id="tu_opinion">';
                        echo '<h2>Su experiencia ya fue enviada, muchas gracias por su colaboración.</h2>';
                        echo '<h2>Esta fue su experiencia:</h2>';
                        echo '<article class="opinion_cliente">';
                        echo '<h3>' . $_SESSION['usuario']['nombre'] . '</h3>';
                        echo '<p><span class="label"> Puntuación: </span> ' . $experiencia_usuario['satisfaccion'] . '</p>';
                        echo '<p><span class="label"> Opinión: </span> ' . $experiencia_usuario['opinion'] . '</p>';
                        echo '</article>';
                        echo '</section>';
                    }

                    //El usuario no ha registrado experiencia aún, le mostramos el form
                    else{

                        echo '<section id="tu_opinion">';
                        echo '<h2>¿Quieres contar tu experiencia en el museo?</h2>';
                        echo '<p>';
                        echo 'En este formulario podrás contar tu experiencia, además de ';
                        echo 'valorar el museo con diversas preguntas a las que tendrás que responder. ';
                        echo 'La puntuación de la experiencia en el museo y su comentario, serán visibles ';
                        echo 'por el resto de usuarios';
                        echo '</p>';

                        echo '<form action="" method="post">';
                        
                        echo '<label id="recomendar" for="experiencia">¿Qué tan satisfactoria te ha parecido la ';
                        echo 'experiencia del 1 al 10?</label>';
                        echo '<input type="number" name="satisfaccion" id="experiencia" min="1" max="10" required>';

                        echo '<fieldset id="radio">';
                        echo '<legend>¿Recomendarías este museo a conocidos o familiares?</legend>';
                        echo '<label for="recomendacion1">Sí, he disfrutado mucho la experiencia.</label>';
                        echo '<input type="radio" id="recomendacion1" name="recomendacion" value="Si">';
                        echo '<label for="recomendacion2">No, no ha sido muy de mi agrado.</label>';
                        echo '<input type="radio" id="recomendacion2" name="recomendacion" value="No">';
                        echo '</fieldset>';
                        
                        echo '<fieldset id="checkbox">';
                        echo '<legend>Por favor, selecciona cuál o cuales han sido tus exposiciónes temporales favoritas</legend>';
                        echo '<label for="miniatura">Exposición de figuras miniatura</label>';
                        echo '<input type="checkbox" id="miniatura" name="exposiciones_favoritas[]"value="miniatura">';
                        echo '<label for="lego">Exposición de LEGO</label>';
                        echo '<input type="checkbox" id="lego" name="exposiciones_favoritas[]" value="lego">';
                        echo '<label for="coolman">Exposición COOLMAN COFFEEMAN</label>';
                        echo '<input type="checkbox" id="coolman" name="exposiciones_favoritas[]" value="coolman">';
                        echo '</fieldset>';
                        
                        echo '<label id="opinion" for="valoracion">Danos tu opinión más detallada, así como mejoras o sugerencias</label>';
                        echo '<textarea id="valoracion" name="op" rows="10" cols="50" required></textarea>';

                        echo '<input type="submit" name="opinion" value="Enviar">';
                        echo '</form>';
                        echo '</section>';

                        #si el usuario le ha dado a enviar opinión, añadirla a la BD
                        if(isset($_POST['opinion'])){

                            //Cogemos los datos del formulario 
                            $dni = $_SESSION['usuario']['dni']; 
                            $satisfaccion = htmlentities(strip_tags($_POST['satisfaccion']));
                            $recomendacion = htmlentities(strip_tags($_POST['recomendacion']));
                            $exposiciones_favoritas = htmlentities(strip_tags(implode(',', $_POST['exposiciones_favoritas'])));
                            $opinion =htmlentities(strip_tags($_POST['op']));

                            $consultaSQL = "INSERT INTO Experiencias (dni, satisfaccion, recomendacion, exposiciones_favoritas, opinion)
                                            VALUES (:dni, :satisfaccion, :recomendacion, :exposiciones_favoritas, :opinion)";

                            try {
                                
                                $stmt = $conexion->prepare($consultaSQL);
                                $stmt->bindValue(':dni', $dni);
                                $stmt->bindValue(':satisfaccion', $satisfaccion);
                                $stmt->bindValue(':recomendacion', $recomendacion);
                                $stmt->bindValue(':exposiciones_favoritas', $exposiciones_favoritas);
                                $stmt->bindValue(':opinion', $opinion);
                                $stmt->execute();

                                // Redireccionar a la página de experiencia satisfecha
                                header("Location: experiencia_satisfecha.php");
                            } catch (PDOException $e) {
                                echo "Error al enviar la experiencia: " . $e->getMessage();
                            }

                        }

                    }   
                    
                }
            ?>

            <section id="opiniones">
                <h2>Opiniones de nuestros clientes</h2>
                <?php
                    //obtenemos las experiencias de los usuarios
                    $consultaSQL = "SELECT * FROM Experiencias";
                    $st = $conexion->prepare($consultaSQL);
                    $st->execute();

                    $experiencias = $st->fetchAll(PDO::FETCH_ASSOC);

                    if($experiencias){
                        foreach($experiencias as $experiencia){
                            //consultamos el nombre
                            $consultaSQL = "SELECT * FROM Usuarios WHERE dni = :dni";
                            $dni = $experiencia['dni'];
                            $st = $conexion->prepare($consultaSQL);
                            $st->bindValue(':dni', $dni);
                            $st->execute();

                            $usuario = $st->fetch(PDO::FETCH_ASSOC);

                            echo '<article class="opinion_cliente">';
                            echo '<h3>' . $usuario['nombre'] . '</h3>';
                            echo '<p><span class="label">Puntuación: </span>' . $experiencia['satisfaccion'] . '</p>';
                            echo '<p><span class="label">Opinión: </span>' . $experiencia['opinion'] . '</p>';
                            echo '</article>';
                        
                        }
                    }
                ?>
            </section>
        </main>
        
        <?php include("./partials/footer.php") ?>
    </body>
</html>