<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colección de obras de arte</title>
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

            <h2> Formulario para dar de alta una obra en el museo </h2>
            <form id="registrationForm" action="#" method="POST">
                
                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="nombre" placeholder="Nombre">
                <div class="error" id="NombreError"></div>

                <label for="Titulo">Título</label>
                <input type="text" id="Titulo" name="titulo" placeholder="Titulo">
                <div class="error" id="TituloError"></div>

                <label for="Autor">Autor/a</label>
                <input type="text" id="Autor" name="autor" placeholder="Autor/a">
                <div class="error" id="AutorError"></div>

                <label for="Fecha">Fecha</label>
                <input type="date" id="Fecha" name="fecha">
                <div class="error" id="FechaError"></div>

                <label for="Descripcion">Descripcion</label>
                <textarea id="Descripcion" name="descripcion" rows="10" cols="50"></textarea>
                <div class="error" id="DescripcionError"></div>

                <label for="Tema">Tema</label>
                <input type="text" id="Tema" name="tema">
                <div class="error" id="TemaError"></div>

                <label for="Epoca">Época</label>
                <input type="text" id="Epoca" name="epoca">
                <div class="error" id="EpocaError"></div>

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


                    $consultaSQL = "INSERT INTO Imagenes (nombre, titulo, autor, fecha, descripcion, tema, epoca) 
                    VALUES (:nombre, :titulo, :autor, :fecha, :descripcion, :tema, :epoca)";
    
                
                    try{
                        $st = $conexion->prepare($consultaSQL);
                        $st->bindValue(':nombre', $nombre);
                        $st->bindValue(':titulo', $titulo);
                        $st->bindValue(':autor', $autor);
                        $st->bindValue(':fecha', $fecha);
                        $st->bindValue(':descripcion', $descripcion);
                        $st->bindValue(':tema', $tema);
                        $st->bindValue(':epoca', $epoca);

                      
                        $st->execute();

                        // Redireccionar a la página de alta exitosa
                        header("Location: obra_aniadida_correctamente.php"); 
                    } catch ( PDOException $e ) { echo "<p>No se ha podido añadir la obra: <p>" . $e->getMessage(); }
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
                const nombre = document.getElementById('Nombre').value.trim();
                const titulo = document.getElementById('Titulo').value.trim();
                const autor = document.getElementById('Autor').value.trim();
                const fecha = document.getElementById('Fecha').value.trim();
                const tema = document.getElementById('Tema').value.trim();
                const epoca = document.getElementById('Epoca').value.trim();


                // Validar Nombre
                if (nombre === '') {
                    document.getElementById('NombreError').textContent = 'El nombre es requerido.';
                    valid = false;
                }

                // Validar Titulo
                if (titulo === '') {
                    document.getElementById('TituloError').textContent = 'El título es requerido.';
                    valid = false;
                }

                // Validar Autor
                if (autor === '') {
                    document.getElementById('AutorError').textContent = 'El autor es requerido.';
                    valid = false;
                }

                // Validar Fecha
                if (fecha === '') {
                    document.getElementById('FechaError').textContent = 'La fecha es requerida.';
                    valid = false;
                }

                // Validar Tema
                if (tema === '') {
                    document.getElementById('TemaError').textContent = 'El tema es requerido.';
                    valid = false;
                }

                // Validar Epoca
                if (epoca === '') {
                    document.getElementById('EpocaError').textContent = 'La época es requerida.';
                    valid = false;
                }

                if (!valid) {
                    event.preventDefault();
                }
            });
        </script>

    </body>
</html>