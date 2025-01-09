<?php
    require_once 'model/DB.php';
    require_once 'model/UsuarioDB.php';
    require_once 'model/DBPDO.php';
    require_once 'model/Usuario.php';
    require_once 'model/UsuarioPDO.php';
    
    $view = [
        'layout' => 'view/layout.php',
        'borrarCuenta' => 'view/vBorrarCuenta.php',
        'detalle' => 'view/vDetalle.php',
        'error' => 'view/vError.php',
        'inicioPrivado' => 'view/vInicioPrivado.php',
        'inicioPublico' => 'view/vInicioPublico.php',
        'login' => 'view/vLogin.php',
        'miCuenta' => 'view/vMiCuenta.php',
        'RSS' => 'view/vRSS.php',
        'registro' => 'view/vRegistro.php',
        'tecnologias' => 'view/vTecnologias.php',
        'WIP' => 'view/vWIP.php'
    ];
    $controller = [
        'borrarCuenta' => 'controller/cBorrarCuenta.php',
        'detalle' => 'controller/cDetalle.php',
        'error' => 'controller/cError.php',
        'inicioPrivado' => 'controller/cInicioPrivado.php',
        'inicioPublico' => 'controller/cInicioPublico.php',
        'login' => 'controller/cLogin.php',
        'miCuenta' => 'controller/cMiCuenta.php',
        'RSS' => 'controller/cRSS.php',
        'registro' => 'controller/cRegistro.php',
        'tecnologias' => 'controller/cTecnologias.php',
        'WIP' => 'controller/cWIP.php'
    ];
    
?>