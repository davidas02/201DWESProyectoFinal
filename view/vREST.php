<main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3>Este REST Convierte el valor escrito de la moneda origen seleccionada por ti y muestra la conversion a la moneda de destino tambien elegida por ti</h3>
            <label for="cantidad">Cantidad:</label>
            <input type="text" id="cantidad" name="cantidad" value="<?php echo $_SESSION['muestraValor']??null; ?>">
            <span style="color: red;"><?php echo $errorFloat??"" ;?></span>
            <label for="origen">Origen</label>
            <select name="origen">
                <option value="EUR">Euro</option>
                <option value="GBP">Libra Esterlina</option>
                <option value="USD">Dolar Americano</option>
                <option value="CHF">Franco Suizo</option>
            </select>
            <label for="destino">Destino</label>
            <select name="destino">
                <option value="EUR">Euro</option>
                <option value="GBP">Libra Esterlina</option>
                <option value="USD">Dolar Americano</option>
                <option value="CHF">Franco Suizo</option>
            </select>
            <input type="submit" value="Convertir" name="convertir" id="convertir"/>
            <br>
            <p><?php echo $_SESSION['muestraApiAjena']; ?></p>
            <br>
            <input type="submit" value="Volver" name="volver" id="volver"/>
        </form>
</main>