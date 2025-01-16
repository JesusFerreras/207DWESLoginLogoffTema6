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
        <?php
            require_once $view[$_SESSION['paginaEnCurso']];
        ?>
        <footer>
            <a href="../index.html">Jesús Ferreras González</a>
            <a href="../207DWESProyectoDWES/indexProyectoDWES.php">DWES</a>
            <a href="https://github.com/JesusFerreras/207DWESLoginLogoffTema6.git" target="_blank"><img src="webroot/images/github.png" alt="github"></a>
            <a href="doc/phpDoc/index.html"  target="_blank">phpDoc</a>
        </footer>
    </body>
    <script>
            document.body.classList.add(getCookie('temaDAW207') != ''? getCookie('temaDAW207') : 'claro');
            document.getElementById('cambioTema').addEventListener('click', cambiarTema);

            function cambiarTema() {
                let temaNuevo = document.body.classList.contains('claro')? 'oscuro' : 'claro';
                
                document.body.classList.remove('claro', 'oscuro');
                document.body.classList.add(temaNuevo);
                
                setCookie('temaDAW207', temaNuevo, 7);
            }

            function setCookie(clave, valor, dias) {
                let fechaActual = new Date();
                fechaActual.setTime(fechaActual.getTime() + (dias * 24 * 60 * 60 * 1000));

                let fechaExpiracion = "expires=" + fechaActual.toUTCString();
                document.cookie = clave + "=" + valor + ";" + fechaExpiracion + ";path=/";
            }

            function getCookie(clave) {
                let nombre = clave + "=";
                let cookies = document.cookie.split(';');
                for(let i = 0; i < cookies.length; i++) {
                    let c = cookies[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(nombre) == 0) {
                        return c.substring(nombre.length, c.length);
                    }
                }
                return "";
            }
        </script>
</html>