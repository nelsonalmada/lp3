/*Ejercicios
Programa que pida al usuario ingresar un valor y un mensaje que diga
cual es mayor o si son iguales
*/
var nro1= parseInt(prompt('Ingrese el valor 1',0));
var nro2= parseInt(prompt('Ingrese el valor 2',0));

while(nro1 <= 0 || nro2 <=0 || isNaN(nro1) || isNaN(nro2)){
     nro1= parseInt(prompt('Vuelva a ingresar el valor 1',0));
     nro2= parseInt(prompt('Vuelva a ingresar el valor 2',0));
}
if (nro1 > nr2){
    alert("El numero 1 es mayor");
} else if(nro1 < nro2){
alert("El numero 2 es mayor");
} else if(nro1 == nro2){
    alert("Son iguales");
}else{
    alert("Ingresa valores correctos");
}