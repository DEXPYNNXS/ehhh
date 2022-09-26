<?php
   $archivo = "data.txt";
   $d_ip = "Direccion IP: {$_SERVER["REMOTE_ADDR"]}\n";
   $fecha = "Fecha: ".date('D dS M,Y h:i a')."\n\n";
   $texto = $d_ip.$fecha;
   $fh = fopen($archivo, 'a');
   fwrite($fh, $texto);
   fclose($fh);
?>
