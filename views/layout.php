<?php

if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;

if (!isset($inicio)) {
    $inicio = false;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="logo">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono responsive">
                </div>

                <div class="derecha">
                    <img src="/build/img/dark-mode.svg" alt="" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Anuncios</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <?php if ($auth) : ?>
                            <a href="/logout">Cerrar Sesión</a>
                        <?php else : ?>
                            <a href="/login">Iniciar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div>
            <?php echo $inicio ? "<h1>Venta de Casas y Departamentos Exclusivos de Lujo </h1>" : ''; ?>
        </div>
    </header>

    <?php echo $contenido; ?>






    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy;</p>
    </footer>
    <script src="../build/js/bundle.min.js"></script>
</body>

</html>