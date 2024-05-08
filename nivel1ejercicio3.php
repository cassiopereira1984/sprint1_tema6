<?php 
//Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)

//Estos métodos mágicos permiten que las clases de PHP tengan un comportamiento personalizado en 
//situaciones específicas, lo que facilita la implementación de ciertas funcionalidades y la mejora 
//de la flexibilidad de las clases.

class test
{
    private string $msg;

    public function __construct(string $msg)
    {
        $this->msg = $msg;
    }

    public function __toString(): string
    {
        return "El msj es: " . $this->msg . PHP_EOL;
    }
}

$msg = new test("Hola, soy Cassio.");
echo $msg;

?>