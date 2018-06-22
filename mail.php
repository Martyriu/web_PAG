<?php
$para = ‘martyriu672@gmail.com’ . ‘, ‘;
$para .= ‘martyriu@hotmail.com’;
$titulo = ‘Movimiento detectado’;
$mensaje = ‘El sensor PIR ha detectado un movimiento en el lugar’;
$cabeceras = ‘From: walter@gmail.com’ . “\r\n” .
‘Reply-To: martyriu1991@gmail.com’ . “\r\n” .
‘X-Mailer: PHP/’ . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>