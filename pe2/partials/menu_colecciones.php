<aside>
    <nav>
       <?php

            if(isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo_usuario'] == 'administrador'){
                echo '<section>';
                echo '<a href="aniadir_obra.php">Añadir Obra</a>';
                echo '</section>';
            }

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

            //sacamos los campos existentes de  autores, tema y epocas de la tabla de Imagenes
            // Consultas para obtener los valores únicos de autores, temas y epocas
            $autores = $conexion->query("SELECT DISTINCT autor FROM Imagenes")->fetchAll(PDO::FETCH_COLUMN);
            $temas = $conexion->query("SELECT DISTINCT tema FROM Imagenes")->fetchAll(PDO::FETCH_COLUMN);
            $epocas = $conexion->query("SELECT DISTINCT epoca FROM Imagenes")->fetchAll(PDO::FETCH_COLUMN);

           
            echo '<section>';
            echo '<h3>Autores</h3>';
            foreach ($autores as $autor){
                echo '<a href="coleccion.php?autor=' . urlencode($autor) . '">' . htmlentities($autor) . '</a>';
            }
            echo '</section>';

            echo '<section>';
            echo '<h3>Temas</h3>';
            foreach ($temas as $tema){
                echo '<a href="coleccion.php?tema=' . urlencode($tema) . '">' . htmlentities($tema) . '</a>';
            }
            echo '</section>';

            echo '<section>';
            echo '<h3>Épocas</h3>';
            foreach ($epocas as $epoca){
                echo '<a href="coleccion.php?epoca=' . urlencode($epoca) . '">' . htmlentities($epoca) . '</a>';
            }
            echo '</section>';
        ?>

    </nav>
</aside>
