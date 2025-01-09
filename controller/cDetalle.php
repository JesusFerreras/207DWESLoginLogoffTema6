<?php
    if (!isset($_SESSION['usuarioDAW207LoginLogoffTema6'])) {
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header('Location: index.php');
        exit();
    }
    
    if (isset($_REQUEST['volver'])) {
        $temp = $_SESSION['paginaAnterior'];
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        header('Location: index.php');
        exit();
    }
?>