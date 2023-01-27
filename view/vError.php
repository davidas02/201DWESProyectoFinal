
<main>
    <form  name="error" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <table class="formulario">
            <tr>
                <td colspan="2"><input type="submit" id="volver" value="Volver" name="volver"></td>
            </tr>
        </table>
    </form>
    <h3 class="tituloerror">Se ha producido el siguiente error:</h3>
    <table class="tablaerror">
        <tr>
            <th>Codigo</td>
            <td><?php echo $codError; ?></td>
        </tr>
        <tr>
            <th>Descripcion</th>
            <td><?php echo $descError; ?></td>
        </tr>
        <tr>
            <th>Archivo</th>
            <td><?php echo $archivoError; ?></td>
        </tr>
        <tr>
            <th>Línea</th>
            <td><?php echo $lineaError; ?></td>
        </tr>
    </table>
</main>
