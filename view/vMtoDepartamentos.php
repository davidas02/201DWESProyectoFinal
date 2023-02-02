<main>
    <div id="mantenimiento">
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <input type="submit" value="Volver" id="volver" name="volver"/>
            <div id="buscar">
                <input type="text" id="codDepto" name="codDepto">
                <input type="submit" value="Buscar Departamento" name="buscar" id="buscar"/>
            </div>
            <table>
                <thead>
                    <tr><th>CodUsuario</th><th>DescUsuario</th><th>Fecha Baja</th><th>VolumenNegocio</th><th>FechaAlta</th></tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($aDepartamentos as $posicion => $oDepartamento) {
                        ?>
                    <tr>
                        <td>
                        <?php
                        $oDepartamento->getCodDepartamento();
                        ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</main>