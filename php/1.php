<h1>Funciones con cadenas</h1>
<?php
echo strlen("Hola mundo desde php");//La cantidad de valores que contiene una cadena
echo"<hr>";
$cadena = " hola mundo ";
echo trim($cadena); //Sacar espacios de cadenas de textos
echo"<hr>";
echo str_word_count("Hola mundo desde php");//Contador de palabras
echo"<hr>";
$cadena= "Hola mundo desde php";
echo strrev($cadena);//Sirve para invertir valores 
echo "<hr>";
echo strpos("Hola mundo desde php", "mundo");
echo "<hr>";
echo str_replace("mundo", "planeta", "Hola mundo");
echo "<hr>";
echo (pi());//Devuelve en numero pi
echo "<hr>";
echo (min(0,150,30,85,-10,-102)); //Trae el valor minimo de una cadena de numeros
echo(max(0,150,30,85,-100,-102));// Trae el valor mayor de una cadena de numeros
echo "<hr>";
echo "<h1>Variables constantes</h1>";
define("nombredeconstante", "Biemvenidos al curso de php");//Se define primero el nombre y luego el valor
echo nombredeconstante; //Se imprime de esta forma con el valor de la constante
echo"<hr>"; //Definir array de tipo costante
define("autos",["BWM", "Toyota", "Nissan", "Kia"]);
echo autos[3];
?>