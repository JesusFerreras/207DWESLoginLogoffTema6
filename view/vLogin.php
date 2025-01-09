<h2>Login</h2>
<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
    <input type="text" id="codigoUsuario" name="codigoUsuario" placeholder="Código" required autofocus><br>
    <input type="password" id="contrasenaUsuario" name="contrasenaUsuario" placeholder="Contraseña" required><br>
    <?php print(isset($mensajeError)? $mensajeError : ''); ?>
    <div>
        <input type="submit" id="inicioSesion" name="inicioSesion" value="Iniciar sesión">
        <!--<input type="submit" id="registro" name="registro" value="Registrarse">-->
        <input type="submit" id="volver" name="volver" value="Volver">
    </div>
</form>