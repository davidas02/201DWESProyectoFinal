
<main>
        <form name="inicioPrivado" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class="formulario">
                <p>
                    <?php
                    //Damos la bienvenida al usuario en diferentes idiomas dependiendo de la cookie idioma
                    echo "Bienvenido " . $_SESSION['usuarioDAW201AppFinal']->getDescUsuario();
                    ?>
                </p>
                <p>
                    <?php
                    //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
                    if ($_SESSION['usuarioDAW201AppFinal']->getNumConexiones() > 1) {
                        echo"Ultimo inicio de sesión: " . $_SESSION['usuarioDAW201AppFinal']->getFechaHoraUltimaConexionAnterior();
                        ?>
                    </p>
                    <p>
                        <?php
                        //Mostramos el numero de conexiones
                        echo"Te has conectado " . $_SESSION['usuarioDAW201AppFinal']->getNumConexiones() . " veces";
                    } else {
                        ?>
                    </p>
                    <p>
                        <?php
                        echo 'Es la primera vez que te conectas';
                    }
                    ?>
                </p>
                <tr>
                    <td><input type="submit" id="salir" value="Cerrrar Sesión" name="salir"></td>

                    <td><input type="submit" id="detalle" value="Detalle" name="detalle"></td>

                    <td><input type="submit" id="modificar" value="Modificar Perfil" name="modificar"></td>

                    <td><input type="submit" id="mtoDptos" name="mtoDptos" value="Mantenimiento Departamentos"></td>
                    <td><input type="submit" id="error" name="error" value="Error"></td>
                    <td><input type="submit" id="rest" name="rest" value="REST"></td>
                </tr>
                <tr>
                </tr>
            </table>
        </form>
    <script src="webroot/js/reloj.js"></script>
</main>