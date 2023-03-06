
<main>
    
    <form name="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td><label for="usuario">Usuario:</label></td>
                <td><input style="background-color:yellow;" type="text" name="usuario" id="codigo" class="usuario"/></td>
                <td style="color: red;">
                    <?php echo $aErrores['usuario']; ?>
                </td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input style="background-color:yellow;" type="password" name="password" id="password" class="password" /></td>
                <td style="color: red;">
                    <?php echo $aErrores['password']; ?>
                </td>
            </tr>
            <tr>
                <td><label for="Rpassword">Repita el Password:</label></td>
                <td><input style="background-color:yellow;" type="password" name="Rpassword" id="Rpassword" class="password" /></td>
                <td style="color: red;">
                    <?php echo $aErrores['Rpassword']; ?>
                </td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input style="background-color:yellow;" type="text" name="nombre" id="nombre" class="nombre" /></td>
                <td style="color: red;">
                    <?php echo $aErrores['nombre']; ?>
                </td>
            </tr>
            <?php
            if($aErrores['valido']!=null){
                ?>
                <tr>
                    <td style="color: red;"><?php echo $aErrores['valido']; ?></td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td><input type="submit" id="registro" value="Registrarse" name="registro"></td>
                <td><input type="submit" value="Volver" name="volver" id="volver"></td>
            </tr>
        </table>
    </form>
    <div id="captcha" class="captcha">
            <p>DEMUESTRA QUE NO ERES UN ROBOT:</p>
            <div id="num1" class="cuestion"></div>
            <div class="cuestion">+</div>
            <div id="num2" class="cuestion"></div>
            <div class="cuestion">=</div>
            <div class="cuestion resultado"></div>

            <div id="sol1" class="opcaptcha"></div>
            <div id="sol2" class="opcaptcha"></div>
            <div id="sol3" class="opcaptcha"></div>
        </div>
    <script src="webroot/js/registro.js"></script>
</main>
