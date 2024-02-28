<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$_SESSION["nombre"] = $nombre;
$_SESSION["correo"] = $correo;


echo "<h2>Datos recibidos!</h2>";
echo "El nombre es: " . $_SESSION["nombre"] . "</br>";
echo "El correo es: " . $_SESSION["correo"];

?>