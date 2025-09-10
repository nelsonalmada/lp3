<h1>Condicionales en php</h1>
<h2>Condicional if</h2>
<?php
/*
if(condicion){
bloque de intrucciones
}else {
    bloque de instrucciones
} else if (condicion){
 bloeque de intrucciones}
 */
  $ahora = date("H");
  if($ahora > "19"){
    echo "Que tenga buen dia";
  }
?>
<h2>Condicional if else</h2>
<?php
if ($ahora < "19"){
    echo"Que tengas un buen dia";
} else {
    echo"Que tengas una buena noche";
}
?>

<h2>Condicional else if</h2>
<?php
if ($ahora < "10"){
    echo"Que tengas un buen dia";
} elseif ($ahora < "20"){
 echo"Que tengas una buena tarde";
}
else {
    echo"Que tengas una buena noche";
}
?>
<hr>
<h1>Switch</h1>
<?php
$color = "negro";
switch($color){
    case"rojo":
    echo"Mi color favorito es el rojo";
    break;
    case"azul":
        echo"Mi color favorito es el azul";
        break;
    case"verde":
        echo"Mi color favorito es eL verde";
        break;
        default;
        echo"Mi color favorito no esta entre estas opciones";
}
?>