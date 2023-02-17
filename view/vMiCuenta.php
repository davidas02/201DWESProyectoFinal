
<main>
     <p>
            Bienvenido <?php echo $_SESSION['usuarioDAW201AppFinal']->getDescUsuario(); ?>
        </p>

        <?php
        //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
        if ($_SESSION['usuarioDAW201AppFinal']->getNumConexiones() > 1) {
            ?>
            <p>
                Ultimo inicio de sesión: "<?php echo $_SESSION['usuarioDAW201AppFinal']->getFechaHoraUltimaConexionAnterior(); ?>;

            </p>
            <p>
                Te has conectado <?php echo $_SESSION['usuarioDAW201AppFinal']->getNumConexiones(); ?> veces
            </p>
        <?php } else { ?>
            <p>
                Es la primera vez que te conectas
            </p>
        <?php } ?>
        <form name="miCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class="formulario">
                <tr>
                    <td><label for="usuario">Usuario:</label></td>
                    <td><input style="background-color: grey" type="text" name="usuario" class="usuario" value="<?php echo $_SESSION['usuarioDAW201AppFinal']->getCodUsuario(); ?>" readonly="true" /></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" style="background: yellow;" name="nombre" class="nombre" value="<?php echo $_SESSION['usuarioDAW201AppFinal']->getDescUsuario(); ?>" /></td>
                    <td style="color: red"><?php echo $errorNombre??""; ?></td>
                </tr>
                <tr>
                    <td></td><td> <input type="submit" id="aceptar" value="Aceptar" name="aceptar"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Volver" name="volver" id="volver"></td>

                <td><input type="submit" value="Borrar Usuario" name="borrarUsuario" id="borrarUsuario"></td>
            
                <td><input type="submit" value="Cambiar Contraseña" name="cambiarPassword" id="cambiarPassword"></td>
            </tr>
        </table>
    </form>
</main>
