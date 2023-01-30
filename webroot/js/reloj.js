let body = document.getElementsByTagName("main")[0];
let reloj = document.createElement("div");
reloj.setAttribute("id", "reloj");
body.appendChild(reloj);
for (let index = 0; index < 8; index++) {
    reloj.appendChild(document.createElement("img"));
}
reloj.getElementsByTagName("img")[2].setAttribute("src", "doc/img/separacion.png");
reloj.getElementsByTagName("img")[5].setAttribute("src", "doc/img/separacion.png");
let imagenes = [
    "doc/img/cero.png",
    "doc/img/uno.png",
    "doc/img/dos.png",
    "doc/img/tres.png",
    "doc/img/cuatro.png",
    "doc/img/cinco.png",
    "doc/img/seis.png",
    "doc/img/siete.png",
    "doc/img/ocho.png",
    "doc/img/nueve.png"
];
let h1 = document.getElementsByTagName("img")[0];
let h2 = document.getElementsByTagName("img")[1];
let m1 = document.getElementsByTagName("img")[3];
let m2 = document.getElementsByTagName("img")[4];
let s1 = document.getElementsByTagName("img")[6];
let s2 = document.getElementsByTagName("img")[7];
setInterval(() => {
    let fecha = new Date();
    h1.setAttribute("src", imagenes[parseInt(fecha.getHours() / 10)]);
    h2.setAttribute("src", imagenes[fecha.getHours() % 10]);
    m1.setAttribute("src", imagenes[parseInt(fecha.getMinutes() / 10)]);
    m2.setAttribute("src", imagenes[fecha.getMinutes() % 10]);
    s1.setAttribute("src", imagenes[parseInt(fecha.getSeconds() / 10)]);
    s2.setAttribute("src", imagenes[fecha.getSeconds() % 10]);
}, 1000);