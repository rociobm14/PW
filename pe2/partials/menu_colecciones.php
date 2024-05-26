<aside>
    <nav>
       <?php

            if(isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo_usuario'] == 'administrador'){
                echo '<section>';
                echo '<a href="aniadir_obra.php">Añadir Obra</a>';
                echo '</section>';
            }
       
       ?>
        <section>
            <h3>Autores</h3>
            <a href="coleccion_mariabe.php">María BE</a>
            <a href="coleccion_evabe.php">Eva BE</a>
            <a href="coleccion_noahbe.php">Noah BE</a>
        </section>

        <section>
            <h3>Temas</h3>
            <a href="coleccion_paisajes.php">Paisajes</a>
            <a href="coleccion_mujeres.php">Mujeres</a>
            <a href="coleccion_animales.php">Animales</a>
        </section>

        <section>
            <h3>Épocas</h3>
            <a href="coleccion_otono.php">Otoño</a>
            <a href="coleccion_primavera.php">Primavera</a>
            <a href="coleccion_verano.php">Verano</a>
        </section> 
    </nav>
</aside>
