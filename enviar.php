
<!-- ======================================================================= -->
<?php

$destino  = "fyarari@sts.com.bo" ;
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$asunto   = $_POST["asunto"];
$telefono = $_POST["telefono"];
$empresa  = $_POST["empresa"];
$mensaje  = $_POST["mensaje"];

$contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

mail($destino, "Contacto desde la Página Web STS", $contenido);


// <!-- ====================================================================================== -->

$destino  = "franzyarari@gmail.com" ;
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$asunto   = $_POST["asunto"];
$telefono = $_POST["telefono"];
$empresa  = $_POST["empresa"];
$mensaje  = $_POST["mensaje"];

$contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

mail($destino, "Contacto desde la P&aacute;gina Web STS", $contenido);

echo"<script> setTimeout(\"location.href='contactos.html'\",1000) </script>"

// <!-- ======================================================================================= -->

// $destino  = "rpayrumani@sts.com.bo" ;
// $nombre   = $_POST["nombre"];
// $correo   = $_POST["correo"];
// $asunto   = $_POST["asunto"];
// $telefono = $_POST["telefono"];
// $empresa  = $_POST["empresa"];
// $mensaje  = $_POST["mensaje"];

// $contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

// mail($destino, "Contacto desde la Página Web STS", $contenido);
// echo"<script> setTimeout(\"location.href='index.html'\",1000) </script>"

// <!-- ===================================================================================== -->

// $destino  = "jtarqui@sts.com.bo" ;
// $nombre   = $_POST["nombre"];
// $correo   = $_POST["correo"];
// $asunto   = $_POST["asunto"];
// $telefono = $_POST["telefono"];
// $empresa  = $_POST["empresa"];
// $mensaje  = $_POST["mensaje"];

// $contenido = "Nombres y Apellidos: " .$nombre . "\nCorreo: " .$correo . "\nAsunto: " .$asunto . "\nTelefono: " .$telefono . "\nEmpresa: (opcional) " .$empresa . "\nMensaje: " .$mensaje;

// mail($destino, "Contacto desde la Página Web STS", $contenido);
// echo"<script> setTimeout(\"location.href='index.html'\",1000) </script>"
// <!-- ============================================================================================ -->



?>

<!-- ===================================================JavaScripts ==========================-->


