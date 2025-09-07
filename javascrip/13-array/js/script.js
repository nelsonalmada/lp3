/*Array arreglos
Predeterminadas en js*/

'use strict'
//Variable normal
var nombre = "Nelson Almada";
//Definir un array 
var nombre = ["Charly Garcia", "León Gieco", "Gustavo Cerati", "Carlos Spinetta", 52, true];

//Otra forma de establecer un array
var lenguajes = new Array("Java", "PHP", "Javascript", "Python", "C++");
console.log(nombre);
console.log(lenguajes);

//Acceder a elementos
console.log("El lenguaje 2 es:" + lenguajes[2]);

//Imprimir un elemento ingresando el numero de indice
var seleccion = parseInt(prompt("Que lenguaje seleccionaras?", 0));
if (seleccion >= lenguajes.length){
    alert("Introduce un numero menor, no existe esa posicion" + lenguajes.length);
} else {
alert(lenguajes[seleccion]);
}

//Recorrer un array
// 1 for
document.write("<h1>Imprimir elementos con for</h1>");
document.write("<ul>");
for (var i = 0; i< lenguajes.length; i++) {
    document.write("<li>" + lenguajes[i] + "</li>");
}
document.write("</ul>");

//2 foreach recomendada
document.write("<h1>Imprimir elementos con foreah</h1>");
document.write("</ul>");
lenguajes.forEach((elemento, indice, array) =>{
    console.log(elemento);
    console.log(indice);
    console.log(array);
    document.write("<li>" + "El indice es: " + indice + "=" + elemento + "</li>");
});

//Recorrer con for in
document.write("<h1>Imprimir elementos con for in</h1>");
document.write("<ul>");
for (let lenguaje in lenguajes){
    document.write("<li>" + "El lenguaje es: " + lenguajes[lenguaje] + "</li>");
}
document.write("</ul>");