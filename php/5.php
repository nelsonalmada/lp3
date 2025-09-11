<h1>Funciones</h1>
<?php
/*
function NombreDelaFuncion(parametros){
instrucciones de codigo;
}
*/

function HolaMundo(){
    echo "Hola mundo desde una funcion!";
}
HolaMundo();//Llamar ala funcion
echo "<h1>Funciones pasándole argumentos</h1>";
function NombreFamiliar($nombre){
    echo "El nombre del familiar es:  <strong>$nombre</strong> <br>";
}
//Utilizar o llamar ala función
NombreFamiliar("Maria");
NombreFamiliar("Juan");
NombreFamiliar("Pedro");

echo "<h1>Funciones pasándole 2 argumentos</h1>";
function NombreAño ($vnombre, $año){
    echo "$vnombre su año de nacimiento es: $año <br>";
}
NombreAño("Julia", "2002");
NombreAño("Carlos", "1995");
NombreAño("Mario", "2004");

echo "<h1>Funcón de suma de valores</h1>";
function SumaNro(int $nro1, int $nro2){
    return $nro1+$nro2;
}
echo "La suma es: ".SumaNro(10,5);
?>