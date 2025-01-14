<header>
   <h1>Tema 6: Aplicación Login-Logoff Multicapa</h1>
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
        <input type="submit" id="miCuenta" name="miCuenta" value="Mi Cuenta">
        <input type="submit" id="cerrarSesion" name="cerrarSesion" value="Cerrar Sesión">
    </form>
</header>
<main>
    <h2>InicioPrivado</h2>
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
        <input type="submit" id="detalle" name="detalle" value="Detalle">
        <input type="submit" id="error" name="error" value="Error">
    </form>
    <?php
        if (isset($_COOKIE['idioma'])) {
            switch ($_COOKIE['idioma']) {
                case 'en':
                    print(
                        "<p>Welcome {$datosUsuario['descUsuario']} this is the ".($datosUsuario['numConexiones'])."º time you log in.".
                        ($datosUsuario['numConexiones']>1? " Your last log in was on {$datosUsuario['fechaHoraUltimaConexionAnterior']->format('Y-m-d H:i:s')}.</p>" : "</p>")
                    );
                break;

                default:
                    print(
                        "<p>Bienvenido {$datosUsuario['descUsuario']} esta es la ".($datosUsuario['numConexiones'])."º vez que se conecta.".
                        ($datosUsuario['numConexiones']>1? " Se conectó por última vez el {$datosUsuario['fechaHoraUltimaConexionAnterior']->format('Y-m-d H:i:s')}.</p>" : "</p>")
                    );
                break;
            }
        } else {
            print(
                "<p>Bienvenido {$datosUsuario['descUsuario']} esta es la ".($datosUsuario['numConexiones'])."º vez que se conecta.".
                ($datosUsuario['numConexiones']>1? " Se conectó por última vez el {$datosUsuario['fechaHoraUltimaConexionAnterior']->format('Y-m-d H:i:s')}.</p>" : "</p>")
            );
        }
    ?>
</main>