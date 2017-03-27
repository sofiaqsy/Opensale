<!-- encabezado, llama a html index/overall/header.php-->
<?php include(HTML_DIR . 'overall/header.php'); ?>
<!-- comienzo del cuerpo-->
<body>
  <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>
 <!-- cuerpo, llama a html index/overall/topnav.php-->
<?php include(HTML_DIR . '/overall/topnav.php'); ?>

<section class="mbr-section mbr-after-navbar">
  <div class="mbr-section__container container mbr-section__container--isolated">
    <div class="row container">
      <div class="pull-right">
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          </li></ul></div>
      </div>
      <ol class="breadcrumb">
        <li><a href="?view=index"><i class="fa fa-user"></i> Usuarios </a></li>
      </ol>
    </div>

    <div class="row categorias_con_foros">
      <div class="col-sm-12">
        <div class="row titulo_categoria">Perfil de <?php echo $_users[$id_usuario]['NOM_USU']; ?> </div>
          <div class="row cajas">
            <div class="col-md-2">
              <center>
                <img src="views/app/images/users/default.jpg" class="thumbnail" height="120" />

              </center>
                <ul style="list-style:none; padding-left: 4px;">
                  <li><b>Nombre : <?php echo $_users[$id_usuario]['NOM_USU']; ?></b> </li>
                  <li><b> Apellido : <?php echo $_users[$id_usuario]['APE_USU']; ?></b> </li>
                  <li><b> Correo : <?php echo $_users[$id_usuario]['COR_USU']; ?></b> </li>
                  <li><b> Numero de publicaciones : 5 </b> </li>
                  <li><b> Numero de ventas : 5</b> </li>

              </ul>
          </div>
          <div class="col-md-10">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- footer, llama a html index/overall/footer.php-->
<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
<!--fin de cuerpo-->
</html>
