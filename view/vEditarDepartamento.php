<main>
    <div class="editarDepartamento">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="codigo">Codigo: </label>
        <input type="text" name="codigo" readonly="true">
        <label for="descripcion">Descripcion: </label>
        <input type="text" name="descripcion">
        <label for="volumen">Volumen de Negocio: </label>
        <input type="text" name="volumen">
        <input type="submit" value="Volver" name="volver" id="volver"/>
    </form>
</div>
</main>
