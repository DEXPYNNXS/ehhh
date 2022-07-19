<?php
    $ ip = $ _SERVIDOR [ 'REMOTE_ADDR' ];
    $ pagina = $ _SERVER [ 'REQUEST_URI' ];
    $ dato = fecha(" dmy / H:i:s ");
    $ facturación =   $ dato . " - " . $ ip . " - " . $ pagina . " <br> ";
    $ fopen = fopen(" ip.html ", " a ");
    fwrite( $ fopen , $ facturación );
    fclose( $ foopen );
    ?>
