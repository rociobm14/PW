<header>
    <?php
        session_start();
    ?>
    <section id="logo">
        <img src="imagenes/IMG_4819.jpg" alt="logotipo del museo">
        <h1>Museo WildFemArte</h1>

    </section>

    <?php
        //Si se le ha dado al botón de iniciar sesión, comprobará que el correo y contraseña coincidan

        if(isset($_SESSION['usuario'])){
            echo '<form action="#" method="POST">';
            echo '<p class="usuario"> Bienvenido/a ' . $_SESSION['usuario']['nombre'] . '</p>';
            echo '<p class="usuario"> Usuario/a ' . $_SESSION['usuario']['tipo_usuario'] . '</p>';
            echo '<input type="submit" id = "CerrarSesion" name="cerrar_sesion" value="Cerrar sesión">';
            echo '</form>';

            if(isset($_POST['cerrar_sesion'])){
                $_SESSION = array(); // Limpiar todas las variables de sesión
                session_destroy(); // Destruir la sesión actual
                header("Location: index.php");
            }

        }

        else{

            echo '<form action="#" method="POST">';
            echo '<h3>Inicio de sesión</h3>';
            echo '<label for="Email">Email</label>';
            echo '<input type="email" id="Email" name="emailusuario" placeholder="Introduzca su email" required>';
            echo '<label for="Contraseña">Contraseña</label>';
            echo '<input type="password" id="Contraseña" name="contraseñausuario" placeholder="Introduzca la contraseña" required>';
            echo '<input type="submit" id="InicioSesion" name="iniciosesion">';
            echo '<a href="altausuarios.php">¡Regístrate aquí!</a>'; 
            echo '</form>';

            if(isset($_POST["iniciosesion"])){

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
    
                //Obtenemos el email y contraseña del usuario
                $email = htmlentities(strip_tags($_POST['emailusuario']));
                $contrasena = htmlentities(strip_tags($_POST['contraseñausuario']));
    
                $consultaSQL = "SELECT * FROM Usuarios WHERE correo = :email";
                try{
                    $st = $conexion->prepare($consultaSQL);
                    $st->bindValue(':email', $email);
                    $st->execute();
    
                    $usuario = $st->fetch(PDO::FETCH_ASSOC);
    
                    if ($usuario && password_verify($contrasena, $usuario['contrasena'])){
                        $_SESSION['usuario'] = $usuario;
                        header("Location: index.php");
                    }
                    
                }catch ( PDOException $e ) { echo "<p>No existe ningún usuario con ese correo electronico<p>" . $e->getMessage(); } 
    
            }

        }
        
    ?>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="coleccion.php">Colección</a>
        <a href="visita.php">Visita</a>
        <a href="exposiciones.php">Exposiciones</a>
        <a href="informacion.php">Información</a>
        <a href="experiencias.php">Experiencias</a>
    </nav>
</header>
