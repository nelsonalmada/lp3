/*Funciones
Predeterminadas en js*/

//Funciones para transformar textos
var numero = 888;
var text1 = "Bienvenidos al curso de Javascript";
var text2 = "TEXTO EN MAYÚSCULA";

//1-Trasnformar de numero a string
var nroconvertido = numero.toString();
console.log(nroconvertido);
console.log(typeof(nroconvertido));

// 2-Cambiar valores de miniscula a mayúscula
var text1MAYUS = text1.toUpperCase();
console.log(text1MAYUS);
// 3-Cambiar valores de mayus a minus
var text2minu = text2.toLocaleLowerCase();
console.log(text2minu);
//4-Longitud de un string
var longitud = "Nelson ";
console.log(longitud.length);
//5-Concatenar
console.log(text1 + text2);

//6-Array-longitud
var array = ["Hola", "Cómo", "Estás?"];
console.log(array.length);

//7- Buscar por indice
var busqueda = text1.indexOf("curso");
console.log(busqueda);

//8- Buscar por indice 2
var busqueda2 = text1.lastIndexOf("de");
console.log(busqueda2);

//9- Buscar por indice
var busqueda3 = text1.search("Javascript");
console.log(busqueda3);

//10- Match
var busqueda4 = text1.match("al");
console.log(busqueda4);

//11- Quitar espacios de adelante o de atras
var sustraerespacios = text1.substr(14, 6);
console.log(sustraerespacios);

//12- Quitar letra
var quitar = text1.charAt(2);
console.log(quitar);

//13-Busqueda con  startswith cuando las palabras inician con un valor esto devuelve true o false
var busqueda5 = text1.startsWith("Bienve");
console.log(busqueda5);

//14- Includes
var busqueda6 = text1.includes("Javascript");
console.log(busqueda6);

//15- Reemplazar una palabra por otra
var remplazar = text1.replace("Javascript", "java");
console.log(remplazar);

//16- borrar una parte y devolver el valor indicado
var borraparte = text1.slice(12, 20);
console.log(borraparte);

//17-spit converir texto en array
var textarray = text1.split();
var textarray = text1.split(" ");
console.log(textarray);
// 18- Quitar espacios con trim
var quitarespacios = text1.trim();
console.log(quitarespacios);

//19- Uso de plantillas
var nombre = prompt("Ingrese el nombre:");
var apellido = prompt("Ingrese el apellido");

var plantilla = `
<h1>Hola que tal</h1>
<h3>el nombre es: ${nombre}</h3>
<h3>el apellido es: ${apellido}</h3>

`;
document.write(plantilla);