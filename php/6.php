<h1>Arrays</h1>
<?php 
$autos = array("Volvo", "Kia", "Toyota");

echo "Tengo un: ".$autos[0].", ".$autos[1]." y ".$autos[2].".";

// Recorrer array con foreach y traer el valor
echo "<h2>Recorrer array con foreach y traer el valor del array</h2>";
foreach($autos as $marca){
    echo $marca . "<br>";
}

// Recorrer array con foreach y traer el valor y el índice
echo "<h2>Recorrer array con foreach y traer el valor del array y el índice</h2>";
foreach($autos as $index => $marca){
    echo "El índice es: ".$index." y la marca es: ".$marca."<br>";
}

// Arrays bidimensionales
echo "<h1>Bidimensionales</h1>";
$autos = array(
    array("Volvo",22,18),
    array("Toyota",12,16),
    array("Kia",41,25),
);

echo $autos[0][0]. " : En stock: ".$autos[0][1]." | Vendidos: ".$autos[0][2]. "<br>";
echo $autos[1][0]. " : En stock: ".$autos[1][1]." | Vendidos: ".$autos[1][2]. "<br>";
echo $autos[2][0]. " : En stock: ".$autos[2][1]." | Vendidos: ".$autos[2][2]. "<br>";
?>
