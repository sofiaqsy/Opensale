<?php
/*
  EL NÚCLEO DE LA APLICACIÓN!
*/

session_start();
date_default_timezone_set('America/Caracas');

#Constantes de conexión
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','opensale');

#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Opensale');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
define('APP_URL','http://opensale.com/'); //Adaptado a mi nuevo entorno con Ubuntu

#Constantes de PHPMailer
define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','public@ocrend.com');
define('PHPMAILER_PASS','Prinick2016');
define('PHPMAILER_PORT',465);


#Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');

require('core/bin/functions/UrlAmigable.php');


?>
