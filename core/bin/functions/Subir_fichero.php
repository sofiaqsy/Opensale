 <?php
function Subir_fichero($directorio_destino, $nombre_fichero)
{

      $foto= $_FILES['campofotografia']['name'];
      var_dump($foto);
      $destino=$directorio_destino.$nombre_fichero;
      copy($_FILES['campofotografia']['tmp_name'],$destino);


}
?>
