<main>
    <div class="mantenimiento">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="submit" value="Volver" id="volver" name="volver"/>
            <input type="submit" value="Añadir" id="add" name="add"/>
            <div id="buscar" style="border: 1px solid black; margin: 10px">
                <label for="descDepto">Descripción: 
                    <input type="text" id="descDepto" value="<?php echo $_SESSION['buscarDepartamentoPorCodigo']; ?>" name="descDepto">
                </label>
                
                <input type="submit" value="Buscar" name="buscarDesc"  id="buscarDesc"/>
                <!--<p>ESTADO:</p> 
                <label for="alta">Alta</label>
                <input type="radio" name="estado" id="alta" value="Alta" />
                <label for="baja">Baja</label>
                <input type="radio" name="estado" id="baja" value="baja" />
                <label for="todos">Todos</label>
                <input type="radio" name="estado" value="todos" id="todos" checked="checked" />-->
            </div>
            <?php if ($aDepartamentos != false) { ?>
                <table style="border: 1px solid black; border-collapse: collapse">
                    <thead>
                        <tr><th>Codigo</th><th>Descripcion</th><th>Fecha Baja</th><th>Volumen de Negocio</th><th>Fecha de Alta</th><th>Editar</th><th>Borrar</th></tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aVMtoDepartamentos as $departamento) {
                            ?><tr><?php
                                foreach ($departamento as $valor) {
                                    ?>
                                    <td>
                                        <?php
                                        echo $valor;
                                        ?>
                                    </td>
                                    <?php
                                }
                                ?>
                                <td> <button type="submit" value="<?php echo $departamento['codDepartamento']; ?>" name="editar">Editar</button> </td>
                                <td> <button type="submit" value="<?php echo $departamento['codDepartamento']; ?>" name="borrar">Borrar</button> </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                    <p>
                        <?php echo $aErrores['buscarDepartamento']; ?>
                    </p><?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</main>