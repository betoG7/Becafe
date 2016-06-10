<?php

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$msj = $_POST['msj'];
require_once('AttachMailer.php'); 

$mailer = new AttachMailer("ing.benjamin@becafe.com.mx", "ing.benjamin@becafe.com.mx", "Tienes un NUEVO mensaje",
    $msj."\n -----Mensaje recibido de: ".$nombre."-----Direccion de correo: ".$correo);
$mailer->send() ? "Enviado": "Problema al enviar";

echo '<script>
alert("Mensaje enviado con exito");
window.location.href="http://www.becafe.com.mx";
</script>'; 

?>