<?php

if(isset($_GET['id']) and array_key_exists($_GET['id'],$_users)) {
  $id_usuario = intval($_GET['id']);
  $db = new Conexion();
  include(HTML_DIR . 'perfil/perfil.php');
  $db->close();
} else {
  header('location: ?view=index');
}

?>
