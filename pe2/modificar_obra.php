<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/altausuarios.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>

            <?php echo '<h2>Modificar obra ' . $_GET['nombre'] . '</h2>';?>

            <form action="#" method="POST">
                
                <label for="Titulo">Título</label>
                <input type="text" id="Titulo" name="titulo" placeholder="Titulo">

                <label for="Autor">Autor/a</label>
                <input type="text" id="Autor" name="autor" placeholder="Autor/a">

                <label for="Fecha">Fecha</label>
                <input type="date" id="Fecha" name="fecha">

                <label for="Descripcion">Descripcion</label>
                <textarea id="Descripcion" name="descripcion" rows="10" cols="50"></textarea>

                <label for="Tema">Tema</label>
                <input type="text" id="Tema" name="tema">

                <label for="Epoca">Época</label>
                <input type="text" id="Epoca" name="epoca">

                <input type="submit" name="modificar" value="Modificar"> 
            </form>
            <?php

                if(isset($_POST['modificar'])){

                    #cogemos el id de la imagen, pasado por la URL
                    $idImagen = $_GET['id'];

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

                    //Comprobamos que datos del formulario se han ido modificando, creo un array para ir añadiendo la consulta SQL
                    $consultaSQL = "UPDATE Imagenes SET "; //la iré concatenando con los parámetros enviados
                    $parametros_modificados = array();
                    if(!empty($_POST['titulo'])){

                        $consultaSQL .= "titulo = :titulo, ";
                    }

                    if(!empty($_POST['autor'])){

                        $consultaSQL .= "autor = :autor, ";
                    }

                    if(!empty($_POST['fecha'])){

                        $consultaSQL .= "fecha = :fecha, ";
                    }

                    if(!empty($_POST['descripcion'])){

                        $consultaSQL .= "descripcion = :descripcion, ";
                    }

                    if(!empty($_POST['tema'])){

                        $consultaSQL .= "tema = :tema, ";
                    }

                    if(!empty($_POST['epoca'])){

                        $consultaSQL .= "epoca = :epoca, ";
                    }

                    //Quitamos la última coma y concatenamos con el resto de la consulta
                    $consultaSQL = rtrim($consultaSQL, ', ') . " WHERE id = :id";

                    try{
                        $stmt = $conexion->prepare($consultaSQL);

                        if(!empty($_POST['titulo'])){

                            $titulo = htmlentities(strip_tags($_POST['titulo']));
                            $stmt->bindValue(':titulo', $titulo);
                        }

                        if(!empty($_POST['autor'])){

                            $autor = htmlentities(strip_tags($_POST['autor']));
                            $stmt->bindValue(':autor', $autor);
                        }

                        if(!empty($_POST['fecha'])){

                            $fecha = htmlentities(strip_tags($_POST['fecha']));
                            $stmt->bindValue(':fecha', $fecha);
                        }

                        if(!empty($_POST['descripcion'])){

                            $descripcion = htmlentities(strip_tags($_POST['descripcion']));
                            $smt->bindValue(':descripcion', $descripcion);
                        }

                        if(!empty($_POST['tema'])){

                            $tema = htmlentities(strip_tags($_POST['tema']));
                            $stmt->bindValue(':tema', $tema);
                        }

                        if(!empty($_POST['epoca'])){

                            $epoca = htmlentities(strip_tags($_POST['epoca']));
                            $stmt->bindValue(':epoca', $epoca);
                        }

                        $stmt->bindValue(':id', $idImagen);

                        $stmt->execute();
                        
                        // Redireccionar a la página de obra modificada correctamente
                        header("Location: obra_modificada_correctamente.php");

                    } catch (PDOException $e) {
                        echo "Error al modificar la obra: " . $e->getMessage();
                    }
                }
                
            ?>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>