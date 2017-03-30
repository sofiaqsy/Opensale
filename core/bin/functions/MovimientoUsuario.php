<?php

function MovimientoUsuario($id) {
  $db = new Conexion();
  $sql = $db->query("SELECT a.COD_USU,a.COD_MOV,a.TIP_MOV,a.FEC_MOV ,b.COD_PROD from movimiento a inner join detalle_movimiento b on a.COD_MOV=b.COD_MOV and a.COD_USU=$id");
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
