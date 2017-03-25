<?php

function Tipos() {
      $db = new Conexion();
      $sql = $db->query("SELECT * FROM TABLA_TIPO WHERE COD_TAB_TIPO='MARCA'");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $tipos[$data['COD_TIPO']] = $data;
    }
    }else{
      $tipos = false;
    }
      $db->liberar($sql);
      $db->close();
    return $tipos;
   }

?>
