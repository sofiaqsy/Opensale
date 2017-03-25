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
define('DB_NAME','opensale1');


#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Opensale');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
define('APP_URL','http://opensale.com/'); //Adaptado a mi nuevo entorno con Ubuntu
define('CARP_IMG','views/app/images/productos/');

#Constantes de PHPMailer
define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','public@ocrend.com');
define('PHPMAILER_PASS','Prinick2016');
define('PHPMAILER_PORT',465);



#Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/UrlAmigable.php');
require('core/bin/functions/Modelos.php');
require('core/bin/functions/Productos.php');

require('core/bin/functions/Tipos.php');
require('core/bin/functions/Subir_fichero.php');
require('core/bin/functions/Productos_usuarios.php');
require('core/bin/functions/Marcasporid.php');



$_users = Users();
$_modelos=Modelos();
$_tipos=Tipos();
$_productos=Productos();
?>
