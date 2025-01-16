<header>
   <h1>Tema 6: Aplicación Login-Logoff Multicapa</h1>
   <button id="cambioTema">&#x25D1;</button>
</header>
<main>
    <h2>Login</h2>
    <form id="accesoACuenta" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
        <input type="text" id="codUsuario" name="codUsuario" placeholder="Código" required autofocus>
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <?php print(isset($mensajeError)? $mensajeError : ''); ?>
        <div>
            <input type="submit" id="iniciarSesion" name="iniciarSesion" value="Iniciar sesión">
            <input type="submit" id="registro" name="registro" value="Registrarse">
            <input type="submit" id="volver" name="volver" value="Volver">
        </div>
    </form>
</main>