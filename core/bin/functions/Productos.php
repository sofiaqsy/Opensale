<?php

function Productos() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM producto;");
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
