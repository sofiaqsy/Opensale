<?php

if(isset($_SESSION['app_id'])) {

  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;

  require('core/models/class.productos.php');
  $productos=new Productos();

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':

      if($_POST) {

        $productos->Add();
        
      } else {
        include(HTML_DIR . 'productos/add_producto.php');
      }
    break;
    case 'edit':
      if($isset_id and array_key_exists($_GET['id'],$_categorias)) {
        if($_POST) {
          $categorias->Edit();
        } else {
          include(HTML_DIR . 'productos/edit_producto.php');
        }
      } else {
        header('location: ?view=categorias');
      }
    break;
    case 'delete':
      if($isset_id) {
        $categorias->Delete();
      } else {
        header('location: ?view=categorias');
      }
    break;
    default:
      include(HTML_DIR . 'productos/all_productos.php');
    break;
  }
} else {
  header('location: ?view=index');
}

?>