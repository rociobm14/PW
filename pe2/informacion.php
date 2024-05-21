<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página de información</title>
        <link rel="stylesheet" type="text/css" href="estilo/header_body_footer.css">
        <link rel="stylesheet" type="text/css" href="estilo/informacion.css">
    </head>
    <body>
        <?php include("./partials/header.php") ?>

        <main>
            <section class="apartado">
                <h2>Horario de apertura</h2>
                <p>Lunes a Viernes de 9:00h-14:30h y 16:00h-20:00h</p>
                <p>Sabados y Domingos de 9:30h-15:30h y 16:00h-23:00h</p>
            </section>

            <section class="apartado">
                <table>
                    <thead>
                        <tr>
                            <th colspan="25">Aperturas parciales o completas y cierres</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td rowspan="7"></td>
                            <td colspan="7">Abril</td>
                            <td rowspan="7"></td>
                            <td colspan="7">Mayo</td>
                            <td rowspan="7"></td>
                            <td colspan="7">Junio</td>
                            <td rowspan="7"></td>
                        </tr>
                    
                        <tr>
                            <td>L</td>
                            <td>M</td>
                            <td>X</td>
                            <td>J</td>
                            <td>V</td>
                            <td>S</td>
                            <td>D</td>
                            <td>L</td>
                            <td>M</td>
                            <td>X</td>
                            <td>J</td>
                            <td>V</td>
                            <td>S</td>
                            <td>D</td>
                            <td>L</td>
                            <td>M</td>
                            <td>X</td>
                            <td>J</td>
                            <td>V</td>
                            <td>S</td>
                            <td>D</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td class="completa">6</td>
                            <td class="completa">7</td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td class="completa">2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td class="cierre">2</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>9</td>
                            <td class="media">10</td>
                            <td class="media">11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td class="media">9</td>
                            <td>10</td>
                            <td>11</td>
                            <td class="media">12</td>
                            <td>3</td>
                            <td>4</td>
                            <td class="completa">5</td>
                            <td class="completa">6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td class="completa">21</td>
                            <td class="media">13</td>
                            <td>14</td>
                            <td class="media">15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                        </tr>

                        <tr>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                            <td class="cierre">27</td>
                            <td class="cierre">28</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td class="completa">25</td>
                            <td class="completa">26</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td class="media">22</td>
                            <td class="media">23</td>
                        </tr>

                        <tr>
                            <td class="cierre">29</td>
                            <td class="cierre">30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td>31</td>
                            <td></td>
                            <td></td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td class="completa">28</td>
                            <td class="completa">29</td>
                            <td class="completa">30</td>
                        </tr>
                    </tbody>
                </table>
                <section id="leyenda">
                    <h3>Leyenda</h3>
                    <section>
                        <p class="nombre">Cierre completo</p>
                        <p id="rojo"></p>
                    </section>

                    <section>
                        <p class="nombre">Apertura de mañanas</p>
                        <p id="naranja"></p>
                    </section>

                    <section>
                        <p class="nombre">Apertura todo el día</p>
                        <p id="verde"></p>
                    </section>
                </section>
            </section>

            <section class="apartado">
                <h3>Precios</h3>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Menores</th>
                            <th>Estudiantes</th>
                            <th>Adultos</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        <tr>
                            <td>Lunes-Viernes</td>
                            <td>5€</td>
                            <td>10€</td>
                            <td>25€</td>
                        </tr>
    
                        <tr>
                            <td>Fines de semana</td>
                            <td>7€</td>
                            <td>14€</td>
                            <td>30€</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="apartado">
                <h2>¿Dónde nos ubicamos?</h2>
                <address>C. de Ruiz de Alarcón, 23, Retiro, 28014 Madrid</address>
            </section>
        </main>

        <?php include("./partials/footer.php") ?>
    </body>
</html>