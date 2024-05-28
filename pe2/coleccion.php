<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/coleccion.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>
     
        <main id="colecciones_generales">
            <?php include("./partials/menu_colecciones.php") ?>

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

                $numero_obras = 9;

                //calculamos en que pagina estamos
                if(!isset($_GET['pagina'])){
                    $pagina = 1;
                }

                else
                    $pagina = $_GET['pagina'];


                //calculamos la imagen desde la que se empieza
                $inicio = ($pagina * $numero_obras) - $numero_obras;

                // si se nos ha pasado un autor, añadirlo a la consulta
                if (isset($_GET['autor'])){
                    $consultaSQL = "SELECT * FROM Imagenes WHERE autor = :autor LIMIT $inicio, $numero_obras";

                }

                else if (isset($_GET['tema'])){
                    $consultaSQL = "SELECT * FROM Imagenes WHERE tema = :tema LIMIT $inicio, $numero_obras";

                }

                else if (isset($_GET['epoca'])){
                    $consultaSQL = "SELECT * FROM Imagenes WHERE epoca = :epoca LIMIT $inicio, $numero_obras";

                }

                else{
                    $consultaSQL = "SELECT * FROM Imagenes LIMIT $inicio, $numero_obras";
                }

            
                $stmt = $conexion->prepare($consultaSQL);

                if(isset($_GET['autor'])){
                    $autor = $_GET['autor'];
                    $stmt->bindValue(':autor', $autor);
                }

                if(isset($_GET['tema'])){
                    $tema = $_GET['tema'];
                    $stmt->bindValue(':tema', $tema);
                }

                if(isset($_GET['epoca'])){
                    $epoca = $_GET['epoca'];
                    $stmt->bindValue(':epoca', $epoca);
                }

                $stmt->execute();

                $imagenes = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if($imagenes){
                    echo '<section id="obras">';
                    echo '<h2>Obras de arte de toda la colección</h2>';
                    echo '<section id="todas">';

                    foreach ($imagenes as $imagen){
                        echo '<article>';
                        echo '<figure>';
                        echo '<a href="obra.php?id=26">';
                        echo '<img src="imagenes/' . $imagen['nombre'] . '" alt="obrasgeneral">';
                        echo '</a>';
                        echo '<figcaption>';
                        echo '<h3>' . $imagen['titulo'] . '</h3>';
                        echo '<p>Autor/a: <cite>' . $imagen['autor'] . '</cite></p>';
                        echo '<p>Fecha: <cite>' . $imagen['fecha'] . '</cite></p>';
                        echo '</figcaption>';
                        echo '</figure>';

                        if(isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo_usuario'] == 'administrador'){
                            echo '<a class="modificar" href="modificar_obra.php?id=' . $imagen['id'] . '&nombre=' . $imagen['titulo'] . '">Modificar</a>';
                            echo '<a class="eliminar" href="eliminar_obra.php?id=' . $imagen['id'] . '">Eliminar</a>';
                        }
                       
                        echo '</article>';
                    }

                    echo '</section>';
                }

                echo '<section id="siguientes">';
                echo '<nav>';

                if(isset($_GET['autor'])){

                    if($pagina > 1){ //Si no estamos en la primera página mostramos el enlace de anterior
                        echo '<a href="coleccion.php?pagina=' . ($pagina - 1) . '&autor=' . $_GET['autor'] . '">Anterior</a>';
                    }
                    echo '<a href="coleccion.php?pagina=' . ($pagina + 1) . '&autor=' . $_GET['autor'] . '">Siguiente</a>';

                }

                else if(isset($_GET['tema'])){

                    if($pagina > 1){ //Si no estamos en la primera página mostramos el enlace de anterior
                        echo '<a href="coleccion.php?pagina=' . ($pagina - 1) . '&tema=' . $_GET['tema'] . '">Anterior</a>';
                    }
                    echo '<a href="coleccion.php?pagina=' . ($pagina + 1) . '&tema=' . $_GET['tema'] . '">Siguiente</a>';

                }

                else if(isset($_GET['epoca'])){

                    if($pagina > 1){ //Si no estamos en la primera página mostramos el enlace de anterior
                        echo '<a href="coleccion.php?pagina=' . ($pagina - 1) . '&epoca=' . $_GET['epoca'] . '">Anterior</a>';
                    }
                    echo '<a href="coleccion.php?pagina=' . ($pagina + 1) . '&epoca=' . $_GET['epoca'] . '">Siguiente</a>';

                }

                else{

                    if($pagina > 1){ //Si no estamos en la primera página mostramos el enlace de anterioe
                        echo '<a href="coleccion.php?pagina=' . ($pagina - 1) . '">Anterior</a>';
                    }
                    echo '<a href="coleccion.php?pagina=' . ($pagina + 1) . '">Siguiente</a>';
                }

                echo '</nav>';
                echo '</section>';
            ?>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>