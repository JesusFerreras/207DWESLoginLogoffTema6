<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jesús Ferreras">
        <link rel="stylesheet" href="webroot/css/estilos.css">
        <title>DWES LoginLogoff Tema6</title>
    </head>
    <body>
        <header>
            <h1>Tema 6: Aplicación Login-Logoff Multicapa</h1>
        </header>
        <main>
            <?php
                require_once $view[$_SESSION['paginaEnCurso']];
            ?>
        </main>
        <footer>
            <a href="../index.html">Jesús Ferreras González</a>
            <a href="../207DWESProyectoDWES/indexProyectoDWES.php">DWES</a>
            <a href="https://github.com/JesusFerreras/207DWESLoginLogoffTema6.git" target="_blank"><img src="doc/github.png" alt="github"></a>
        </footer>
    </body>
</html>