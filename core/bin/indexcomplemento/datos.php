<?php

mysql_connect('localhost','root','');
$sql=	mysql_select_db('opensale1')OR DIE ("No se conecto a la base de datos");
$consulta=mysql_query("select COD_MOD,DES_MOD FROM MODELO WHERE COD_MAR='".$_GET["id"]."'");
echo '<option value="OpModeloTodos">TODOS</option>';
while($fila=mysql_fetch_array($consulta)){
echo '<option value="'.$fila[0].'">'.utf8_encode($fila[1])."</option>";
}



 ?>
