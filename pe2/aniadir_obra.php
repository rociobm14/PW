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

            <h2> Formulario para dar de alta una obra en el museo </h2>
            <form action="#" method="POST">
                
                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="nombre" placeholder="Nombre">

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

                <input type="submit" name="aniadir" value="Añadir"> 
            </form>
            <?php

                if(isset($_POST['aniadir'])){

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

                    // Obtener los datos del formulario y realizando su saneamiento
                    $nombre = htmlentities(strip_tags($_POST['nombre']));
                    $titulo =  htmlentities(strip_tags($_POST['titulo']));
                    $autor =  htmlentities(strip_tags($_POST['autor']));
                    $fecha =  htmlentities(strip_tags($_POST['fecha']));
                    $descripcion =  htmlentities(strip_tags($_POST['descripcion']));
                    $tema =  htmlentities(strip_tags($_POST['tema']));
                    $epoca =  htmlentities(strip_tags($_POST['epoca']));


                    $consultaSQL = "INSERT INTO Imagenes (nombre, titulo, autor, fecha, descripcion, tema) 
                                    VALUES (:nombre, :titulo, :autor, :fecha, :descripcion, :tema)";
                
                    try{
                        $st = $conexion->prepare($consultaSQL);
                        $st->bindValue(':nombre', $nombre);
                        $st->bindValue(':titulo', $titulo);
                        $st->bindValue(':autor', $autor);
                        $st->bindValue(':fecha', $fecha);
                        $st->bindValue(':descripcion', $descripcion);
                        $st->bindValue(':tema', $tema);
                      
                        $st->execute();

                        // Redireccionar a la página de alta exitosa
                        header("Location: obra_aniadida_correctamente.php"); 
                    } catch ( PDOException $e ) { echo "<p>No se ha podido añadir la obra: <p>" . $e->getMessage(); }
                }

            ?>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>