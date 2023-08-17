<?php
$nombre = $_POST ["Nombre"];
$email = $_POST ["Email"];
$fecha = $_POST ["Fecha"];

$intereses = "";

if (isset ($_POST["ToursGuiados"])) {
    $intereses = $intereses." ".$_POST["ToursGuiados"];
}

if (isset ($_POST["Espectaculos"])) {
    $intereses = $intereses." ".$_POST["Espectaculos"];
}

if (isset ($_POST["Gastronomia"])) {
    $intereses = $intereses." ".$_POST["Gastronomia"];
}

if (isset ($_POST["Naturaleza"])) {
    $intereses = $intereses." ".$_POST["Naturaleza"];
}

$mensaje = "<h1>".$nombre."</h1>";
$mensaje .= "<p> Su viaje es el : " .$fecha. "</p>";
$mensaje .= "<p> Sus intereses son: " .$intereses. "</p>";


$para = "maria.rossi@davinci.edu.ar";
$asunto = "Mensaje desde la web";
$headers = "Mime-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";

mail ($para, $asunto, $mensaje, $headers);
header ("Location: gracias.html");

?>

