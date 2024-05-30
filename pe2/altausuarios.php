<!DOCTYPE html>
<html lang="es">
<head>
    <title>Página de Registro de usuarios</title>
    <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
    <link rel="stylesheet" type="text/css" href="estilo/altausuarios.css">
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <?php include("./partials/header.php") ?>

    <main>
        <h2>Formulario para ser un miembro de nuestro museo</h2>

        <form id="registrationForm" action="#" method="POST">
            <label for="DNI">DNI</label>
            <input type="text" id="DNI" name="dni" placeholder="DNI">
            <div class="error" id="DNIError"></div>

            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="nombre" placeholder="Nombre">
            <div class="error" id="NombreError"></div>

            <label for="Apellidos">Apellidos</label>
            <input type="text" id="Apellidos" name="apellidos" placeholder="Apellidos">
            <div class="error" id="ApellidosError"></div>

            <label for="Correo">Correo Electronico</label>
            <input type="email" id="Correo" name="correo" placeholder="Correo Electronico">
            <div class="error" id="CorreoError"></div>

            <label for="Contraseña">Contraseña</label>
            <input type="password" id="Password" name="contras" placeholder="Contraseña">
            <div class="error" id="PasswordError"></div>

            <label for="Telefono">Telefono</label>
            <input type="tel" id="Telefono" name="telefono" placeholder="Numero de telefono">
            <div class="error" id="TelefonoError"></div>

            <label for="Nacimiento">Fecha de Nacimiento</label>
            <input type="date" id="Nacimiento" name="nacimiento">
            <div class="error" id="NacimientoError"></div>

            <datalist id="conocermuseo">
                <option value="Amigos/as">
                <option value="Familiares">
                <option value="Redes Sociales">
                <option value="Otros">
            </datalist>
            <label for="texto2">¿Cómo conociste nuestro museo? </label>
            <input type="text" id="texto2" name="conocer" list="conocermuseo">
            <div class="error" id="ConocerError"></div>

            <input type="submit" name="registrarse" value="Registrarse"> 
        </form>

        <?php
        if (isset($_POST['registrarse'])) {
            // Conexión a la BBDD
            $dsn = "mysql:host=localhost;dbname=dbrociobarragan_pw2324";
            $usuario = "pwrociobarragan";
            $password = "23rociobarragan24";
            try {
                $conexion = new PDO($dsn, $usuario, $password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "<p>Conexión fallida: " . $e->getMessage() . "</p>";
            }

            // Obtener los datos del formulario y realizar su saneamiento
            $dni = htmlentities(strip_tags($_POST['dni']));
            $nombre = htmlentities(strip_tags($_POST['nombre']));
            $apellidos = htmlentities(strip_tags($_POST['apellidos']));
            $correo = htmlentities(strip_tags($_POST['correo']));
            $contrasena = htmlentities(strip_tags(password_hash($_POST['contras'], PASSWORD_DEFAULT)));
            $telefono = htmlentities(strip_tags($_POST['telefono']));
            $nacimiento = htmlentities(strip_tags($_POST['nacimiento']));
            $conociste = htmlentities(strip_tags($_POST['conocer']));
            $tipo_usuario = htmlentities(strip_tags('general'));

            $consultaSQL = "INSERT INTO Usuarios (dni, nombre, apellidos, correo, contrasena, telefono, nacimiento, conociste, tipo_usuario) 
                            VALUES (:dni, :nombre, :apellidos, :correo, :contrasena, :telefono, :nacimiento, :conociste, :tipo_usuario)";

            try {
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
            } catch (PDOException $e) {
                echo "<p>No se ha podido registrar el usuario: <p>" . $e->getMessage();
            }
        }
        ?>
    </main>

    <?php include("./partials/footer.php") ?>  

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            let valid = true;

            // Clear previous error messages
            const errors = document.querySelectorAll('.error');
            errors.forEach(error => error.textContent = '');

            // Get form values
            const dni = document.getElementById('DNI').value.trim();
            const nombre = document.getElementById('Nombre').value.trim();
            const apellidos = document.getElementById('Apellidos').value.trim();
            const correo = document.getElementById('Correo').value.trim();
            const password = document.getElementById('Password').value.trim();
            const telefono = document.getElementById('Telefono').value.trim();
            const nacimiento = document.getElementById('Nacimiento').value.trim();
            const conocer = document.getElementById('texto2').value.trim();

            // Validar DNI
            if (dni === '') {
                document.getElementById('DNIError').textContent = 'El DNI es requerido.';
                valid = false;
            } 

            else if (!/^\d{8}[A-Za-z]$/.test(dni)) {
                document.getElementById('DNIError').textContent = 'DNI no válido. Debe tener 8 dígitos y una letra.';
                valid = false;
            }

            // Validar Nombre
            if (nombre === '') {
                document.getElementById('NombreError').textContent = 'El nombre es requerido.';
                valid = false;
            }

            // Validar Apellidos
            if (apellidos === '') {
                document.getElementById('ApellidosError').textContent = 'Los apellidos son requeridos.';
                valid = false;
            }

            // Validar Correo
            if (correo === '') {
                document.getElementById('CorreoError').textContent = 'El correo es requerido.';
                valid = false;
            } 
            else if (!/\S+@\S+\.\S+/.test(correo)) {
                document.getElementById('CorreoError').textContent = 'Correo no válido.';
                valid = false;
            }

            // Validate Password
            if (password === '') {
                document.getElementById('PasswordError').textContent = 'La contraseña es requerida.';
                valid = false;
            } 
            
            else if (password.length < 6) {
                document.getElementById('PasswordError').textContent = 'La contraseña debe tener al menos 6 caracteres.';
                valid = false;
            }

            // Validate Telefono
            if (telefono === '') {
                document.getElementById('TelefonoError').textContent = 'El teléfono es requerido.';
                valid = false;
            }
            else if (!/^\d{9}$/.test(telefono)) {
                document.getElementById('TelefonoError').textContent = 'Teléfono no válido. Debe tener 9 dígitos.';
                valid = false;
            }

            // Validate Nacimiento
            if (nacimiento === '') {
                document.getElementById('NacimientoError').textContent = 'La fecha de nacimiento es requerida.';
                valid = false;
            }

            // Validate Conocer
            if (conocer === '') {
                document.getElementById('ConocerError').textContent = 'Este campo es requerido.';
                valid = false;
            }

            if (!valid) {
                event.preventDefault(); // Prevent form submission if there are validation errors
            }
        });
    </script>
</body>
</html>
