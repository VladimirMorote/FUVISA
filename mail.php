<?php
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $nombre = $_POST["telefono"];
    $email = $_POST["email"]; #correo de la persona que escribe el mensaje
    $mensaje = $_POST["monot"];
    $nombre = $_POST["asunto"];
    $nombre = $_POST["msg"];


    $destinatario = "info@fuvisa.com.ar"; #aqui insertar el correo al que deseas que llegue el mensaje que envies en el formulario

    $asunto = "Prospecto ";

    $contenido = "Nombre: $nombre \n";
    $contenido .= "Email: $telefono \n";
    $contenido .= "Mensaje: $email";
    $contenido = "Nombre: $monot \n";
    $contenido .= "Email: $asunto \n";
    $contenido .= "Mensaje: $msg";

    $header = "Mail de: $email"; #aqui insertas el correo del remitente en el encabezado del correo.

    $mail = mail($destinatario,$nombre,$telefono, $monot, $asunto, $email, $header);

    if ($mail) {
        echo "<script>alert('El correo se envio correctamente :)')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
    }
}




$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre $apellido / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;


header("Location: gracias.html" );
?>