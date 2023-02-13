<main>
    <div class="mantenimiento">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="submit" value="Volver" id="volver" name="volver"/>
            <div id="buscar">
                <input type="text" id="codDepto" value="<?php echo $aRespuestas['buscarDepartamento']; ?>" name="codDepto">
                <input type="submit" value="Buscar Departamento" name="buscar"  id="buscar"/>
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
                        <tr><th>CodUsuario</th><th>DescUsuario</th><th>Fecha Baja</th><th>VolumenNegocio</th><th>FechaAlta</th></tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        foreach ($aDepartamentos as $posicion => $oDepartamento) {
                            
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    echo $oDepartamento->getCodDepartamento();
                                    ?>
                                </td>
                                <td><?php
                                    echo $oDepartamento->getDescDepartamento();
                                    ?></td>
                                <td>
                                    <?php
                                    if($oDepartamento->getFechaBaja())
                                    echo $oDepartamento->getFechaBaja()->format('Y-m-d H:i:s');
                                    ?>
                                </td>
                                <td><?php
                                    echo $oDepartamento->getVolumenNegocio();
                                    ?></td>
                                <td>
                                    <?php
                                    echo $oDepartamento->getFechaAlta();
                                    ?>
                                </td>
                                
                            </tr>
                            <?php
                        }
                    } else{ ?>
                    <p>
                       No hay Departamentos con esa descripción
                    </p><?php    
                    }
                        ?>
                </tbody>
            </table>
        </form>
    </div>
</main>