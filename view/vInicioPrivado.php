
<main>
        <form name="inicioPrivado" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
            <div class="inicioPrivado">
                <tr>
                    <input type="submit" id="salir" value="Cerrrar Sesión" name="salir">

                    <input type="submit" id="detalle" value="Detalle" name="detalle">

                    <input type="submit" id="modificar" value="Modificar Perfil" name="modificar">

                    <input type="submit" id="mtoDptos" name="mtoDptos" value="Mantenimiento Departamentos">
                    <input type="submit" id="error" name="error" value="Error">
                   <input type="submit" id="rest" name="rest" value="REST">
            </div>
        </form>
    <script src="webroot/js/reloj.js"></script>
</main>