<main>
    <div class="editarDepartamento">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table>
                <tr>
                    <td><label for="codigo">Codigo: </label></td>
                    <td><input type="text" name="codigo" style="background-color:yellow;"></td>
                    
                </tr>
                <tbody>
                    <tr>
                        <td><label for="descripcion">Descripcion: </label></td>
                        <td><input type="text" style="background-color:yellow;" name="descripcion"></td>
                        <td style="color: red;"> <?php echo $aErrores['descripcion']; ?></td>
                    </tr>
                    <tr>
                        <td><label for="volumen">Volumen de Negocio: </label></td>
                        <td><input type="text" id="volumen" name="volumen" style="background-color:yellow;" ></td>
                        <td style="color: red;"> <?php echo $aErrores['volumenNegocio']; ?></td>
                    </tr>
                    <tr>
                        <td style="color: red;"> <?php echo $aErrores['duplicado']; ?></td>
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