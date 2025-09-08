/*Array busquedas */

'use strict'

var lenguajes = ["Javascript", "Java", "PHP", "C++","Python"];

//find
var buscafind = lenguajes.find(lenguajes => lenguajes == "Java");
console.log(buscafind);

//FindIndex

var buscaindex = lenguajes.findIndex(lenguajes => lenguajes == "PHP");
console.log(buscaindex);

//Busqueda de valores numericos con some (devuelve true o false)
var numeros = [10, 30, 50, 80, 90, 100, 30];
var buscaposition = numeros.some(numeros => numeros >= 130);
console.log(buscaposition);