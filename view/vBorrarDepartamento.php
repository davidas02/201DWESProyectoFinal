<main>
    <div class="editarDepartamento">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2>Desea Borrar el siguiente Departamento</h2>
            <table>
                <tr>
                    <td><label for="codigo">Codigo: </label></td>
                    <td><input type="text" name="codigo" value="<?php echo $aVDepartamento['codigo']; ?>" readonly="true" style="background-color: gray;"></td>
                    
                </tr>
                <tbody>
                    <tr>
                        <td><label for="descripcion">Descripcion: </label></td>
                        <td><input type="text" name="descripcion" value="<?php echo $aVDepartamento['descripcion']; ?>" readonly="true" style="background-color: gray;"></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">Volumen de Negocio: </label></td>
                        <td><input type="text" id="volumen" name="volumen" value="<?php echo $aVDepartamento['volumen']; ?>" readonly="true" style="background-color: gray;"></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">fecha Alta: </label></td>
                        <td><input type="text"  name="fechaAlta" value="<?php echo $aVDepartamento['fechaAlta']; ?>" readonly="true" style="background-color: gray;"></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">Fecha Baja: </label></td>
                        <td><input type="text" name="fechaBaja"  value="<?php echo $aVDepartamento['fechaBaja']; ?> " readonly="true" style="background-color: gray;"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Cancelar" name="cancelar" id="cancelar"/></td>
                        <td><input type="submit" value="Borrar" name="borrar" id="borrar"/></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</main>

