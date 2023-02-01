<main>
    <form name="miCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td><input type="submit" value="Volver" name="volver" id="volver"></td>

                <td><input type="submit" value="Borrar Usuario" name="borrarUsuario" id="borrarUsuario"></td>
            </tr>
            <tr>
                <td><label for="password">Password Antigua:</label></td>
                <td><input style="background-color: yellow;" type="password" name="Apassword" id="password" /></td>
            </tr>
            <tr>
                <td><label for="password">Password Nueva:</label></td>
                <td><input style="background-color: yellow;" type="password" name="Npassword" id="password" /></td>
            </tr>
            <tr>
                <td><label for="Rpassword">Repita el Password Nuevo:</label></td>
                <td><input style="background-color: yellow;" type="password" name="RNpassword" id="Rpassword" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Cambiar Contraseña" name="cambiarPassword" id="cambiarPassword"></td>
            </tr>
        </table>
    </form>
</main>

