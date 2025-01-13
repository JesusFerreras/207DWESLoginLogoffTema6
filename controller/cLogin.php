<?php
    if (isset($_SESSION['usuarioDAW207LoginLogoffTema6'])) {
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header('Location: index.php');
        exit();
    }
    
    if (isset($_REQUEST['volver'])) {
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header('Location: index.php');
        exit();
    }
    
    if (isset($_REQUEST['registro'])) {
        $_SESSION['paginaEnCurso'] = 'registro';
        header('Location: index.php');
        exit();
    }
    
    if (isset($_REQUEST['iniciarSesion'])) {
        if (isset($_REQUEST['codigoUsuario']) && isset($_REQUEST['contrasenaUsuario'])) {
            $usuario = UsuarioPDO::validarUsuario($_REQUEST['codigoUsuario'], $_REQUEST['contrasenaUsuario']);

            if ($usuario instanceof Usuario) {
                $usuario = UsuarioPDO::registrarUltimaConexion($usuario);

                $_SESSION['usuarioDAW207LoginLogoffTema6'] = $usuario;
                $_SESSION['paginaEnCurso'] = 'inicioPrivado';

                header('Location: index.php');
                exit();
            } else {
                $mensajeError = '<p class="error">Error de autenticación</p>';
            }
        } else {
            $mensajeError = '<p class="error">Error de autenticación</p>';
        }
    }
    
    require_once $view['layout'];
?>