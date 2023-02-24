<main>
    <div class="editarDepartamento">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table>
                <tr>
                    <td><label for="codigo">Codigo: </label></td>
                    <td><input type="text" name="codigo" style="background-color:yellow;" value="<?php echo $_REQUEST['codigo']??'' ;?>"></td>
                    <td style="color: red;"> <?php echo $aErrores['codigo']; ?></td>
                </tr>
                <tbody>
                    <tr>
                        <td><label for="descripcion">Descripcion: </label></td>
                        <td><input type="text" style="background-color:yellow;" name="descripcion" value="<?php echo $_REQUEST['descripcion']??'' ;?>"></td>
                        <td style="color: red;"> <?php echo $aErrores['descripcion']; ?></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">Volumen de Negocio: </label></td>
                        <td><input type="text" id="volumen" name="volumen" style="background-color:yellow;" value="<?php echo $_REQUEST['volumen']??'' ;?>"></td>
                        <td style="color: red;"> <?php echo $aErrores['volumen']; ?></td>
                    </tr>
                    
                    <tr>
                        <td><input type="submit" value="Volver" name="volver" id="volver" class="cancelar"/></td>
                        <td><input type="submit" value="Aceptar" name="aceptar" id="aceptar" class="aceptar"/></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</main>