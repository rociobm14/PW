<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de Registro de usuarios</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/altausuarios.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <h2>Formulario para ser un miembro de nuestro museo</h2>

            <form action="#" method="POST">
                
                <label for="DNI">DNI</label>
                <input type="text" id="DNI" name="dni" placeholder="DNI" required>

                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="nombre" placeholder="Nombre" required>
                
                <label for="Apellidos">Apellidos</label>
                <input type="text" id="Apellidos" name="apellidos" placeholder="Apellidos" required>
                 
                <label for="Correo">Correo Electronico</label>
                <input type="email" id="Correo" name="correo" placeholder="Correo Electronico" required>

                <label for="Contraseña">Contraseña</label>
                <input type="password" id="Password" name="contras" placeholder="Contraseña" required>

                <label for="Telefono">Telefono</label>
                <input type="tel" id="Telefono" name="telefono" placeholder="Numero de telefono" required>

                <label for="Nacimiento">Fecha de Nacimiento</label>
                <input type="date" id="Nacimiento" name="nacimiento" required>

                <datalist id="conocermuseo">
                    <option value="Amigos/as">
                    <option value="Familiares">
                    <option value="Redes Sociales">
                    <option value="Otros">
                </datalist>
                <label for="texto2">¿Cómo conociste nuestro museo? </label>
                <input type="text" id="texto2" name="conocer" list="conocermuseo" required>

                <input type="submit" name="registrarse" value="Registrarse"> 
            </form>
            <?php

                if(isset($_POST['registrarse'])){

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
                    $dni = htmlentities(strip_tags($_POST['dni']));
                    $nombre =  htmlentities(strip_tags($_POST['nombre']));
                    $apellidos =  htmlentities(strip_tags($_POST['apellidos']));
                    $correo =  htmlentities(strip_tags($_POST['correo']));
                    $contrasena =  htmlentities(strip_tags(password_hash($_POST['contras'], PASSWORD_DEFAULT)));
                    $telefono =  htmlentities(strip_tags($_POST['telefono']));
                    $nacimiento =  htmlentities(strip_tags($_POST['nacimiento']));
                    $conociste =  htmlentities(strip_tags($_POST['conocer']));
                    $tipo_usuario =  htmlentities(strip_tags('general'));
                
                    $consultaSQL = "INSERT INTO Usuarios (dni, nombre, apellidos, correo, contrasena, telefono, nacimiento, conociste, tipo_usuario) 
                                    VALUES (:dni, :nombre, :apellidos, :correo, :contrasena, :telefono, :nacimiento, :conociste, :tipo_usuario)";
                
                    try{
                        $st = $conexion->prepare($consultaSQL);
                        $st->bindValue(':dni', $dni);
                        $st->bindValue(':nombre', $nombre);
                        $st->bindValue(':apellidos', $apellidos);
                        $st->bindValue(':correo', $correo);
                        $st->bindValue(':contrasena', $contrasena);
                        $st->bindValue(':telefono', $telefono);
                        $st->bindValue(':nacimiento', $nacimiento);
                        $st->bindValue(':conociste', $conociste);
                        $st->bindValue(':tipo_usuario', $tipo_usuario);
                        $st->execute();

                        // Redireccionar a la página de alta exitosa
                        header("Location: alta_exitosa.php");

                    }catch ( PDOException $e ) { echo "<p>No se ha podido registrar el usuario: <p>" . $e->getMessage(); } 
                }
            ?>
        </main>

        <?php include("./partials/footer.php") ?>  
    </body>
</html>