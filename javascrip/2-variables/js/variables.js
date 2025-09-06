/*Variables */
//'use strict' //Esto es para que el lenguaje sea mas sencible
//Variables de tipo cadena
var pais = "<h1>Paraguay</h1>";
var continente = "<h1>América</h1>";
//Concatenar
var p_c = pais + '-' + continente;
console.log(p_c);
document.write(pais+"<hr>");
document.write(continente)
// 2 Modo estricto
//'use strict'
//4-let Permite definir variables limitando su alcance
//5-var Permite definir variables y utilizarlas globalmente
let varlet ="Esto es una variable let";
document.write("<br>"+ varlet);
//6- Constantes es una variable que no puede cambiar de valor
//y se define con la palabra const
var web = "https://www.utic.edu.py";
console.log(web);
const constweb ="https://www.utic.edu.py/cire";
constweb = "Otra Página";
console.log(constweb)