<main>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="cantidad">Cantidad:</label>
            <input type="text" id="cantidad" name="cantidad">
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
            <input type="submit" value="Volver" name="volver" id="volver"/>
            <br>
            <label for="resultado">Resultado:</label>
            <input type="text" id="resultado" name="resultado" value="<?php echo $muestra; ?>" readonly="">
        </form>
</main>
