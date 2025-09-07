/*Array arreglos multidimencionales
Predeterminadas en js*/

'use strict'
var categoria = ["Acción", "Comedia", "Terror"];
var peliculas = ["Peli de accion", "Peli comedia", "Peli terror"];

var cine = [categoria, peliculas];
console.log(cine[0][1]);
console.log(cine[1][2]);

//Operaciones con array
//Añadir elementos push
peliculas.push("Batman");
console.log(peliculas);

//Quitar elementos pop
peliculas.pop();
peliculas.pop();
peliculas.pop();
console.log(peliculas);

//Añadir elemetos con pront
var elemento = "";
do {
    elemento = prompt("Introduce una peli");
    peliculas.push(elemento);
} while (elemento != "PARAR");

//Recorrer array y mostrar valores en pantalla
peliculas.forEach((pelis) =>{
    document.write("Peliculas: " + pelis + "<br>");
}

);

//Convertir array a texto
var pelistring = peliculas.join();
console.log(typeof pelistring,pelistring);

//Convertir texto a array
var cadena = "texto1, texto2, texto3";
console.log(cadena.split());

//Ordenar array en orden alfabetico sort
categoria.sort();
console.log(categoria);

//Invertir orden reverse
peliculas.reverse();
console.log(peliculas);