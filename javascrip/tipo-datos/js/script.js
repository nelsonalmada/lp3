/*Tipo de datos */
// Númericos
var nro1 = 50;
var nro2 = 25;
//Operadores
var suma= nro1 + nro2;
var resta= nro1 - nro2;
var multi = nro1 * nro2;
var divi = nro1 / nro2;
var porcentaje = nro1 % nro2;
var decimal = 25.5;
var verdadero = true;
var falso = false;


var texto = "El resultado de la operación es:";
document.write(texto, suma, "<br>");
document.write(texto, resta, "<br>");
document.write(texto, multi, "<br>");
document.write(texto, divi, "<br>");
document.write(texto, porcentaje, "<br>");
document.write(texto, decimal, "<br>");
document.write(texto, verdadero,falso ,"<br>");

//Funciones para convertir datos
document.write("<hr>")
document.write("<h1>Funciones para convertir datos</h1>");

var numerico = '30';
document.write(numerico);
var tipodatostring = typeof(numerico);
document.write(tipodatostring, "<br>");
//Convertir string a numeros
var numerico_convertido = Number(numerico);
document.write(numerico_convertido);
//Ver tipo de dato
var tipodato = typeof(numerico_convertido);
document.write(tipodato, "<br>");
//Convertir nro a string
var nroentero = 40;
var convertidostring = String(nroentero, "<br>");
var tipostring = typeof(convertidostring);
document.write(convertidostring, tipostring);
//ParsetInt
var nrostring = '100';
var parse = parseInt(nrostring);
document.write(parse);
console.log(typeof(parse))