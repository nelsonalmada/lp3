/*Funciones
Conjunto de instrucciones que se ejecuta cuando se las llama
*/
//Definir una funcion

function calculadora(){
    var mensaje = alert("Hola soy una función, me tenes que llamar para que funcione");
}
//Llamar ala funcion
calculadora();

//Funcion donde se pide ingresar valor
function calcular(n1, n2, mostrar = false){
if (mostrar == false){
    alert("Tenes que activarme con true")
} else {
    var suma = n1 + n2;
    return suma;
}
}
var nro1= parseInt(prompt('Ingrese el valor 1'));
var nro2 = parseInt(prompt('Ingrese el valor 2'));
var mostrar = prompt(prompt('Mostrar'));
alert(calcular(nro1, nro2, mostrar));