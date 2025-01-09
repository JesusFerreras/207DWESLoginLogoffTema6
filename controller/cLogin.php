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
    
    if (isset($_REQUEST['inicioSesion'])) {
        if (isset($_REQUEST['codigoUsuario']) && isset($_REQUEST['contrasenaUsuario'])) {
            $usuario = UsuarioPDO::validarUsuario($_REQUEST['codigoUsuario'], $_REQUEST['contrasenaUsuario']);

            if ($usuario instanceof stdClass) {
                DBPDO::ejecutarConsulta(<<<FIN
                    update T01_Usuario
                        set T01_NumConexiones = T01_NumConexiones+1,
                        T01_FechaHoraUltimaConexion = now()
                        where T01_CodUsuario = {$usuario->getCodUsuario()}
                    ;
                FIN);

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