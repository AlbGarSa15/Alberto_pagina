<?php
    session_start();

    // Verificar si el usuario ha enviado el formulario de inicio de sesión
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Aquí puedes agregar la lógica para verificar el usuario y contraseña, por ejemplo, consultando una base de datos
        // Por ahora, vamos a simular un inicio de sesión exitoso con usuario "admin" y contraseña "admin"
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        if ($usuario === "admin" && $contraseña === "admin") {
            $_SESSION["usuario"] = $usuario; // Iniciar sesión estableciendo una variable de sesión
            header("Location: index.php"); // Redirigir a la página principal
            exit();
        } else {
            $mensaje_error = "Usuario o contraseña incorrectos"; // Mensaje de error si el inicio de sesión falla
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <!-- Tu contenido de cabecera -->
    </header>

    <section class="about container">
        <!-- Tu contenido sobre nosotros -->
    </section>

    <main class="servicios">
        <!-- Tu contenido de servicios -->
    </main>

    <section class="formulario container">
        <!-- Tu formulario de consulta -->
    </section>

    <footer class="footer">
        <!-- Tu pie de página -->
    </footer>

</body>
</html>
