<h2>Registro</h2>
<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
    <input type="text" id="codUsuario" name="codUsuario" placeholder="Código" required autofocus>
    <?php print(isset($mensajesError)? '<p class="error">'.$mensajesError['codUsuario'].'</p>' : ''); ?>
    <input type="text" id="descUsuario" name="descUsuario" placeholder="Descripción" required>
    <?php print(isset($mensajesError)? '<p class="error">'.$mensajesError['descUsuario'].'</p>' : ''); ?>
    <input type="password" id="password" name="password" placeholder="Contraseña" required>
    <?php print(isset($mensajesError)? '<p class="error">'.$mensajesError['password'].'</p>' : ''); ?>
    <div>
        <input type="submit" id="registro" name="registro" value="Registrarse">
        <input type="submit" id="volver" name="volver" value="Volver">
    </div>
</form>