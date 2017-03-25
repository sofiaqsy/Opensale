<?php


  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'combo':
    include('core/bin/indexcomplemento/datos.php');
    break;

    case 'mostrar':
    include('core/bin/indexcomplemento/mostrar.php');
    break;
}
?>
