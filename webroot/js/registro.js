let codigo=document.getElementById("codigo");
let password=document.getElementById("password");
let rPassword=document.getElementById("Rpassword");
let nombre=document.getElementById("nombre");
let destinoArrastrable = document.querySelector(".resultado");
let num1 = document.getElementById("num1");
let num2 = document.getElementById("num2");
let botonEnviar = document.getElementById("registro");
let captcha = document.getElementById("captcha");
let formulario = document.getElementsByTagName("form")[0];
console.log(codigo);
codigo.addEventListener("keyup",comprobarUser);
nombre.addEventListener("keyup",comprobarNombre);
function comprobarUser(e) {
    let reg=/[a-z]{4,8}/;
        if (reg.test(e.target.value)) {
            e.target.classList.remove("error");
            e.target.classList.add("correcto");
        } else {
            e.target.classList.remove("correcto");
            e.target.classList.add("error");
        }
}
function comprobarNombre(e) {
    let reg=/[a-z]{4,}/;
        if (reg.test(e.target.value)) {
            e.target.classList.remove("error");
            e.target.classList.add("correcto");
        } else {
            e.target.classList.remove("correcto");
            e.target.classList.add("error");
        }
}
password.addEventListener("keyup",comprobarPassword);
rPassword.addEventListener("keyup",comprobarPassword);
function comprobarPassword(e) {
    let regPass=/[a-z]{4,8}/;
        if (regPass.test(e.target.value)) {
            e.target.classList.remove("error");
            e.target.classList.add("correcto");
        } else {
            e.target.classList.remove("correcto");
            e.target.classList.add("error");
        }
}
botonEnviar.addEventListener("click", comprobarCampos);
function comprobarCampos(e) {
        e.preventDefault()
        let fCorrecto = true
        if (document.getElementsByClassName("correcto").length < 3) {
            fCorrecto = false
            alert("Alguno de los campos tiene un formato incorrecto");
        }
        
        if (fCorrecto) {
            captcha.style.display = "block";
            let opciones = document.getElementsByClassName("opcaptcha");
            let n1 = parseInt(Math.random() * 10);
            let n2 = parseInt(Math.random() * 10);
            let res = n1 + n2;
            document.getElementById("num1").textContent = n1;
            document.getElementById("num2").textContent = n2;
            let opCorrecta = parseInt(Math.random() * 3);
            
            for (const iterator of opciones) {
                iterator.setAttribute("draggable", "true");
                let n=parseInt(Math.random() * 19)
                while (n==res) {
                    n=parseInt(Math.random() * 19)
                }
                iterator.textContent = n;
                iterator.addEventListener("dragstart", (e) => {
                    iterator.style.opacity = 0.5;
                    iterator.classList.add("movimiento");
                });
                iterator.addEventListener("dragend", (e) => {
                    iterator.style.opacity = 1;
                    iterator.classList.remove("movimiento");
                });
            }
            opciones[opCorrecta].textContent = res;
            destinoArrastrable.addEventListener("dragenter", (e) => {
                destinoArrastrable.style.backgroundColor = "yellow";
                destinoArrastrable.textContent = "";
            });
            destinoArrastrable.addEventListener("dragover", (e) => { e.preventDefault() });
            destinoArrastrable.addEventListener("dragleave", (e) => {
                destinoArrastrable.style.backgroundColor = "transparent";
                destinoArrastrable.textContent = "";
            });
            destinoArrastrable.addEventListener("drop", comprobarCorrecto);
            function comprobarCorrecto(e) {
                let escogido = document.getElementsByClassName("movimiento")[0];
                if (escogido.textContent == res) {
                    destinoArrastrable.style.backgroundColor = "green";
                    destinoArrastrable.textContent = "OK";
                    setTimeout(() => {
                        let p = captcha.getElementsByTagName("p")[0];
                        p.textContent = 'ENHORABUENA, NO ERES UN ROBOT';
                        setTimeout(() => {
                            formulario.submit();
                        }, 2000);
                    }, 2000);
                } else {
                    destinoArrastrable.style.backgroundColor = "red";
                    destinoArrastrable.textContent = "NO";
                }
            }
        } else {
            captcha.style.display = "none";
        }
    }



