<header>
   <h1>Tema 6: Aplicación Login-Logoff Multicapa</h1>
   <button id="cambioTema">&#x25D1;</button>
</header>
<main>
    <h2>Error</h2>
    <?php
        print('<table>');
        foreach ($datosError as $clave => $valor) {
            print("<tr><th>$clave</th><td>$valor</td></tr>");
        }
        print('</table>');
    ?>
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
        <input type="submit" id="volver" name="volver" value="Volver">
    </form>
</main>