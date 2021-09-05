<?php
$destino= "jimmy83alex@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
mail($destino,"contacto", $contenido);
header("location:gracias.html");

?>