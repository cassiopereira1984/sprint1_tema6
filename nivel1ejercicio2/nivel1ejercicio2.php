<?php
//Fes un programa que faci servir almenys un parell de constants màgiques.

// Estas constantes proporcionan información útil sobre el entorno actual de ejecución del script.

//Line:
echo "Esta es la linea: " . __LINE__ . PHP_EOL;

//Dir:
echo "Este es el dir: " . __DIR__ . PHP_EOL;

//Function:
function laFunction()
{
    echo "Esta es la function: " . __FUNCTION__ . PHP_EOL;
}
laFunction();

//Class
class LaClase
{
    function __construct()
    {
        echo "Esta es la clase: " . __CLASS__ . PHP_EOL;
    }
}
$clase = new LaClase();

?>