<h2>Login</h2>
<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
    <input type="text" id="codUsuario" name="codUsuario" placeholder="Código" required autofocus>
    <input type="password" id="password" name="password" placeholder="Contraseña" required>
    <?php print(isset($mensajeError)? $mensajeError : ''); ?>
    <div>
        <input type="submit" id="iniciarSesion" name="iniciarSesion" value="Iniciar sesión">
        <input type="submit" id="registro" name="registro" value="Registrarse">
        <input type="submit" id="volver" name="volver" value="Volver">
    </div>
</form>