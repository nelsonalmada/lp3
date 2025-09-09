<!DOCTYPE html>
<html>
    <body>
        <?php
    //Comentario de linea simple
    /*Comentario extendido */
    //Variable
    $variable = 5;
    echo $variable;
    echo "<hr>"; //Ingresar codigo html en php
    $cadena = "Hola mundo desde php";
    print $cadena;
    echo "<hr>";
    $cadena2 = 'Hola mundo desde php';
    echo"<h1>$cadena2</h1>";
    echo "Esto es ", "String", "Se pueden escribir por separado entre ,";
    echo "<hr>";
    $variablebuleana = false;
    var_dump($variablebuleana);//Sirve para saber que contiene una variable
    echo "<hr>";
    $variabledecimal = 3.14;
    var_dump($variabledecimal);
        ?>
        <h1>Tipo de datos objetos</h1>
        <?php
        class Auto {
    public $marca;
    public $modelo;
    public $motor;

    function __construct() {
        $this->marca = "Kia";
        $this->modelo = "Picanto";
        $this->motor = 2.0;
    }
}
      
        $automovil = new Auto();
        echo $automovil->modelo;
        echo $automovil->marca;

        echo"<hr>";
        echo"<h1>Variables Null</h1>";
        $x = "Hola mundo";
        $x = null;
        var_dump($x);
        ?>
    </body>
</html>