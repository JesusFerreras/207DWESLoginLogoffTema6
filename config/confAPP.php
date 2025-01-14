<?php
    foreach (scandir('model') as $fichero) {
        if ($fichero != '.' && $fichero != '..') {
            require_once 'model/'.$fichero;
        }
    }
    
    require_once 'core/231018libreriaValidacion.php';
    
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