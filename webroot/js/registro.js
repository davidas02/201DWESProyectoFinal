let codigo=document.getElementById("codigo");
let password=document.getElementById("password");
let rPassword=document.getElementById("Rpassword");
let nombre=document.getElementById("nombre");
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



