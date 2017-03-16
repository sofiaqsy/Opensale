<?php

function Modelos() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM modelo;");
  if($db->rows($sql) > 0) {
    while($data = $db->recorrer($sql)) {
      $modelos[$data['COD_MOD']] = $data;
    }
  } else {
    $modelos = false;
  }
  $db->liberar($sql);
  $db->close();

  return $modelos;
}

?>
