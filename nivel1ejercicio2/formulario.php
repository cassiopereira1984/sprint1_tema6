<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$user = $_POST["user"];

$_SESSION["nombre"] = $nombre;
$_SESSION["correo"] = $correo;
$_SESSION["user"] = $user;


echo "<h2>Datos recibidos!</h2>";
echo "El nombre es: " . $_SESSION["nombre"] . "</br>";
echo "El correo es: " . $_SESSION["correo"] . "</br>";
echo "El Username es: " . $_SESSION["user"];

?>