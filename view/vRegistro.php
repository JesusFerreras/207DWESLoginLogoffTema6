<header>
   <h1>Tema 6: Aplicación Login-Logoff Multicapa</h1>
   <button id="cambioTema">&#x25D1;</button>
</header>
<main>
    <h2>Registro</h2>
    <form id="accesoACuenta" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
        <input type="text" id="codUsuario" name="codUsuario" placeholder="Código" required autofocus>
        <?php print(isset($mensajesError['codUsuario'])? '<p class="error">'.$mensajesError['codUsuario'].'</p>' : ''); ?>
        <input type="text" id="descUsuario" name="descUsuario" placeholder="Descripción" required>
        <?php print(isset($mensajesError['descUsuario'])? '<p class="error">'.$mensajesError['descUsuario'].'</p>' : ''); ?>
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <?php print(isset($mensajesError['password'])? '<p class="error">'.$mensajesError['password'].'</p>' : ''); ?>
        <div>
            <input type="submit" id="registro" name="registro" value="Registrarse">
            <input type="submit" id="volver" name="volver" value="Volver">
        </div>
    </form>
</main>