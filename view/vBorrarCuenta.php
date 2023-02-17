
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

    <form name="borrarCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td><input type="submit" id="borrar" value="Borrar Cuenta" name="borrar"></td>
                <td><input type="submit" value="Cancelar" name="cancelar" id="cancelar"></td>
            </tr>
        </table>
    </form>
</table>  
</main>