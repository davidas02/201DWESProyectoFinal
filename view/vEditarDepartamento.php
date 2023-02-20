<main>
    <div class="editarDepartamento">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table>
                <tr>
                    <td><label for="codigo">Codigo: </label></td>
                    <td><input type="text" name="codigo" value="<?php echo $aDepartamento['codigo']; ?>" readonly="true" style="background-color: gray;"></td>
                    <td style="color: red;"><?php echo $aErrores['codigo']; ?></td>
                </tr>
                <tbody>
                    <tr>
                        <td><label for="descripcion">Descripcion: </label></td>
                        <td><input type="text" style="background-color:yellow;" name="descripcion" value="<?php echo $aDepartamento['descripcion']; ?>"></td>
                        <td style="color: red;"><?php echo $aErrores['descripcion']; ?></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">Volumen de Negocio: </label></td>
                        <td><input type="text" name="volumen" style="background-color:yellow;" value="<?php echo $aDepartamento['volumen']; ?>"></td>
                        <td style="color: red;"><?php echo $aErrores['volumenNegocio']; ?></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">fecha Alta: </label></td>
                        <td><input type="text" name="volumen" value="<?php echo $aDepartamento['fechaAlta']; ?>" readonly="true" style="background-color: gray;"></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">Fecha Baja: </label></td>
                        <td><input type="text" name="volumen" value="<?php echo $aDepartamento['fechaBaja']; ?>"readonly="true" style="background-color: gray;"></td>
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