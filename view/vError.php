<h2>Error</h2>
<?php
    print('<table>');
    foreach ($datosError as $clave => $valor) {
        print("<tr><th>$clave</th><td>$valor</td></tr>");
    }
    print('</table>');
?>