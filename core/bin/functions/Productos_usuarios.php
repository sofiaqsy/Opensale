<?php

function Productos_usuarios($id) {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM producto WHERE COD_USU=$id  ;");
  if($db->rows($sql) > 0) {
    while($data = $db->recorrer($sql)) {
      $tipos[$data['COD_PROD']] = $data;
    }
  } else {
    $tipos = false;
  }
  $db->liberar($sql);
  $db->close();

  return $tipos;
}

?>
