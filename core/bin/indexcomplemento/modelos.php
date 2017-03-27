<?php

if($_GET["id_mod"]!=""){
if($_GET["id_mod"]!="OpModeloTodos"){
$_modelosporid=Modelosporid($_GET["id_mod"]);
if(false!=$_modelosporid){

foreach($_modelosporid as $id_modeloporid => $content_array){
  $condicion="";
if($_modelosporid[$id_modeloporid]['SIT_PROD']=='R'){$condicion='Reservado';}
echo'<div class="grid_1_of_3 images_1_of_3">
<a href="?view=detalles&id='.$id_modeloporid.'"><img src="'.CARP_IMG.'img3.jpg" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap
Responsive Web Template Mobile website template Free"><center><p>'.$_tipos[$_modelos[$_modelosporid[$id_modeloporid]['COD_MOD']]['COD_MAR']]['DES_TIPO'].'-'.$_modelos[$_modelosporid[$id_modeloporid]['COD_MOD']]['DES_MOD'].'<br>S/'.$_modelosporid[$id_modeloporid]['PRE_PROD'].'.00 '.$condicion.'</p></center> </a>
</div>';
}


}else{
  echo'<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> No se ha encontrado ninguna publicacion.</div>';
}


}else{
  header('location: ?view=datos&mode=mostrar&id='.$_GET["id_mar"]);
}

}


?>
