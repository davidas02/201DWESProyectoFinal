<main>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" value="Iniciar Sesion" id="login" name="login">
    </form>
    <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <input type="radio" name="radio-btn" id="radio6">
                <div class="slide first">
                    <a href="doc/EjercicioResumenDWES_22-23/230129ArbolDeNavegación.pdf" target="_blank">
                        <img src="doc/img/arbolNavegacion.png" alt="">
                    </a>
                    
                </div>
                <div class="slide">
                    <a href="doc/EjercicioResumenDWES_22-23/230129CatalogoDeRequisitos.pdf" target="_blank">
                    <img src="doc/img/catalogoRequsitos.png" alt="">
                    </a>
                </div>
                <div class="slide">
                    <a href="doc/EjercicioResumenDWES_22-23/230207_DiagramaUML.png" target="_blank">
                    <img src="doc/EjercicioResumenDWES_22-23/230207_DiagramaUML.png" alt="">
                    </a>
                </div>
                <div class="slide">
                    <a href="doc/EjercicioResumenDWES_22-23/230214_DWES201_UsoDeLaSesion.pdf" target="_blank">
                        <img src="doc/img/usoSesion.png" alt="">
                    </a>
                </div>
                <div class="slide">
                    <a href="doc/EjercicioResumenDWES_22-23/230129DiagramaDeClases.pdf" target="_blank">
                    <img src="doc/img/modeloFisicoDatos.png" alt="">
                    </a>
                </div>
                <div class="slide">
                    <a href="doc/EjercicioResumenDWES_22-23/230129RelacionDeFicheros.pdf" target="_blank">
                    <img src="doc/img/relacionFicheros.png" alt="">
                    </a>
                </div>
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                    <div class="auto-btn6"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
                <label for="radio6" class="manual-btn"></label>
            </div>
        </div>
    <script>
        var totalRadios = 6;
        var contador = 1;
        setInterval(function () {
            var radio = document.getElementById('radio' + contador);
            if (radio) {
                radio.checked = true;
                contador = (contador % totalRadios) + 1;
            }
        }, 5000);
    </script>
</main>

