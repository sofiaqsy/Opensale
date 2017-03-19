<?php

function Productos() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM tabla_tipo;");
  if($db->rows($sql) > 0) {
    while($data = $db->recorrer($sql)) {
      $tipos[$data['COD_TAB_TIPO']] = $data;
    }
  } else {
    $tipos = false;
  }
  $db->liberar($sql);
  $db->close();

  return $tipos;
}

?>
