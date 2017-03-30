<?php

function Tipos($TIPO,$modelo) {
      $db = new Conexion();
      $sql = $db->query("SELECT A.DES_PROD,C.DES_TIPO,B.DES_MOD FROM  producto a
inner join  modelo b on a.COD_MOD=b.COD_MOD
INNER JOIN tabla_tipo c WHERE c.COD_TAB_TIPO='MARCA' AND B.COD_MOD='$TIPO' AND C.COD_TIPO='$modelo'");
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
