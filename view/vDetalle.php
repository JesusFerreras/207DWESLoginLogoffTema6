<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
    <input type="submit" id="volver" name="volver" value="Volver">
</form>
<?php
    print('<h3 style="margin-bottom: 16px">$_SESSION</h3>'.(isset($_SESSION)? mostrar($_SESSION):'<p>Variable indefinida</p>'));
    print('<h3 style="margin-bottom: 16px">$_COOKIE</h3>'.mostrar($_COOKIE));
    print('<h3 style="margin-bottom: 16px">$_SERVER</h3>'.mostrar($_SERVER));
    print('<h3 style="margin-bottom: 16px">$_GET</h3>'.mostrar($_GET));
    print('<h3 style="margin-bottom: 16px">$_POST</h3>'.mostrar($_POST));
    print('<h3 style="margin-bottom: 16px">$_FILES</h3>'.mostrar($_FILES));
    print('<h3 style="margin-bottom: 16px">$_REQUEST</h3>'.mostrar($_REQUEST));
    print('<h3 style="margin-bottom: 16px">$_ENV</h3>'.mostrar($_ENV));
    
    
    function mostrar($array) {
        if (!empty($array)) {
            $contenido = '<table>';
            foreach ($array as $clave => $valor) {
                $contenido .= "<tr><th>$clave</th><td>".($valor instanceof stdClass? serialize($valor) : $valor)."</td></tr>";
            }
            $contenido .= '</table>';
            
            return $contenido;
        } else {
            return '<p>Variable vacía</p>';
        }
    }
?>