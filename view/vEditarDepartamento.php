<main>
    <div class="editarDepartamento">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table>
                    <tr>
                        <td><label for="codigo">Codigo: </label></td>
                        <td><input type="text" name="codigo" value="<?php echo $aDepartamento['codigo']; ?>" readonly="true"></td>
                    </tr>
                <tbody>
                    <tr>
                        <td><label for="descripcion">Descripcion: </label></td>
                        <td>        <input type="text" name="descripcion" value="<?php echo $aDepartamento['descripcion']; ?>">
</td>
                    </tr>
                    <tr>
                        <td><label for="volumen">Volumen de Negocio: </label></td>
                        <td><input type="text" name="volumen" value="<?php echo $aDepartamento['volumen']; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Volver" name="volver" id="volver"/></td>
                        <td><input type="submit" value="Aceptar" name="aceptar" id="aceptar"/></td>
                    </tr>
                </tbody>
            </table>

        
        
    </form>
</div>
</main>