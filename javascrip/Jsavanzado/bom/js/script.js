/*BOM
Browser Object Model
Manipular el navegador y obtener datos
*/
//Tamaño ancho de la ventana del navegador
console.log(window.innerWidth, "Ancho de la página");

//2-Alto del navegador
console.log(window.innerHeight, "Alto del navegador");

//3-Crear una funcion para traer el ancho y alto del navegador
function traerbom (ancho, largo){
    var ancho = console.log(window.innerWidth, "Ancho de la pagina con una funcion");
    var largo = console.log(window.innerHeight, "Alto del navegador con una funcion");
}

traerbom();

//4-Traer el tamaño real del monitor o dispositivo
console.log(screen.width, "Ancho de la página");
console.log(screen.height, "Alto de la página");

//5-Traer url
console.log(window.location, "Esto es la url donde estas ahora");

//Funcion para redireccionar a otra url
function redirect (url){
    window.location.href = url;
}
redirect(url);

//Abrir otra ventana del navegador
function abrirventana (url){
    window.open(url, "", "witdh=800, height=400");
}
abrirventana(url);