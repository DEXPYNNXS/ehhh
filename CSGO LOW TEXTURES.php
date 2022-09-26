<?php
   $archivo = "data.txt"; //Nombre del archivo donde se almacenará la información.
   $d_ip = "Direccion IP: {$_SERVER["REMOTE_ADDR"]}\n"; //String con la dirección IP incluida.
   $fecha = "Fecha: ".date('D dS M,Y h:i a')."\n\n"; //String con la fecha y hora. 
   $texto = $d_ip.$fecha; //String que se escribirá en el archivo. 
   //Quedará algo así: 
   //Dirección IP: 127.0.0.1 (Para dar un ejemplo la ip local.)
   //Fecha: Fecha y hora en la cual el usuario entro a la url en su navegador.
   $fh = fopen($archivo, 'a'); //Se abre el archivo con el nombre "data.txt".
   fwrite($fh, $texto); //Se guarda el contenido de la variable "texto" en el archivo.
   fclose($fh); //Se cierra el archivo.
   //Ahora haré una breve demostración del funcionamiento del código. 
?>
