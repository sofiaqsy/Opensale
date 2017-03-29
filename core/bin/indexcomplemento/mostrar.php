<?php

if($_GET["id"]!="OpMarcaTodos"){
$_marcasporid=Marcasporid($_GET["id"]);
if(false!=$_marcasporid){


foreach($_marcasporid as $id_marcaporid => $content_array){
  if($_marcasporid[$id_marcaporid]['SIT_PROD']!='V'){
  $condicion="";
if($_marcasporid[$id_marcaporid]['SIT_PROD']=='R'){$condicion='Reservado';}
echo'<div class="grid_1_of_3 images_1_of_3">
<a href="?view=detalles&id='.$id_marcaporid.'"><img src="'.CARP_IMG.$_marcasporid[$id_marcaporid]['IMA_PROD'].'" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap
Responsive Web Template Mobile website template Free"><center><p>'.$_tipos[$_modelos[$_marcasporid[$id_marcaporid]['COD_MOD']]['COD_MAR']]['DES_TIPO'].'-'.$_modelos[$_marcasporid[$id_marcaporid]['COD_MOD']]['DES_MOD'].'<br>S/'.$_marcasporid[$id_marcaporid]['PRE_PROD'].'.00 '.$condicion.'</p></center> </a>
</div>';
}
}


}else{
  echo'<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> No se ha encontrado ninguna publicacion.</div>';
}
}else{
  foreach($_productos as $id_producto => $content_array){
    if($_productos[$id_producto]['SIT_PROD']!='V'){
    $condicion="";
  if($_productos[$id_producto]['SIT_PROD']=='R'){$condicion='Reservado';}
  echo'<div class="grid_1_of_3 images_1_of_3">
  <a href="?view=detalles&id='.$id_producto.'"><img src="'.CARP_IMG.$_productos[$id_producto]['IMA_PROD'].'" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap
  Responsive Web Template Mobile website template Free"><center><p>'.$_tipos[$_modelos[$_productos[$id_producto]['COD_MOD']]['COD_MAR']]['DES_TIPO'].'-'.$_modelos[$_productos[$id_producto]['COD_MOD']]['DES_MOD'].'<br>S/'.$_productos[$id_producto]['PRE_PROD'].'.00'.$condicion.'</p></center> </a>
  </div>';
}}
}


?>
