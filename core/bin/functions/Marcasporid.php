<?php
function Marcasporid($id) {
      $db = new Conexion();
      $sql = $db->query("SELECT a.COD_PROD,a.PRE_PROD,c.DES_TIPO,c.cod_TIPO,b.COD_MOD from producto a inner join modelo b on a.COD_MOD=b.COD_MOD inner join tabla_tipo c on c.COD_TIPO=b.COD_MAR inner join usuario d where d.COD_USU=a.COD_USU and c.COD_TIPO='$id';");
    if($db->rows($sql) > 0){
    while($data = $db->recorrer($sql)){
      $tipos[$data['COD_PROD']] = $data;
    }
    }else{
      $tipos = false;
    }
      $db->liberar($sql);
      $db->close();
    return $tipos;
   }

?>
