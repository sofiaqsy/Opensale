<?php


  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'combo':
    include('core/bin/indexcomplemento/datos.php');
    break;

    case 'mostrar':
    if(isset($_GET['id'])){
    include('core/bin/indexcomplemento/mostrar.php');}

    if(isset($_GET['id_mod'])){include('core/bin/indexcomplemento/modelos.php');}

    break;
}
?>
