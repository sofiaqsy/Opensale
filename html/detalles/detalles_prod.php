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
        <li><a href="?view=index">Detalles de producto</a></li>
      </ol>
    </div>

    <div class="row categorias_con_foros">
      <div class="col-sm-12">
        <div class="row titulo_categoria">Mas detalles<?php echo $_tipos[$_modelos[$_productos[$_POST['id']]['COD_MOD']]['COD_MOD']]['DES_TIPO'] ?> </div>
          <div class="row cajas">
            <div class="col-md-4">
              <center>


                    <img src="<?php echo CARP_IMG ?>img3.jpg" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap Responsive Web Template Mobile website template Free">


              </center>


          </div>

          <div class="col-md-8">

            <blockquote>

            <ul class="list-group">
  <li class="list-group-item">Tipo de celular       :  <?php echo $_tipos[$_modelos[$_productos[$_GET['id']]['COD_MOD']]['COD_MOD']]['DES_TIPO']?>      </li>
  <li class="list-group-item">Modelo                :  <?php echo $_modelos[$_productos[$_GET['id']]['COD_MOD']]['COD_MAR']?>     </li>
  <li class="list-group-item">Estado                :   <?php if( $_productos[$_GET['id']]['EST_PROD']=='U'){echo 'Usado';}else{echo 'Nuevo';}?>     </li>
  <li class="list-group-item">Precio                :    <span>S/</span><?php echo $_productos[$_GET['id']]['PRE_PROD']?><span>.00 </span>    </li>
  <li class="list-group-item">Situacion             :   <?php if( $_productos[$_GET['id']]['SIT_PROD']=='A'){echo 'Activo';}else if($_productos[$_GET['id']]['SIT_PROD']=='R'){echo 'Reservado';}else{echo 'Vendido';}?>     </li>
  <li class="list-group-item">Descripcion             :   <?php echo $_productos[$_GET['id']]['DES_PROD']?>     </li>
  <li class="list-group-item">Fecha de publicacion  :    <?php echo $_productos[$_GET['id']]['FEC_PROD']?>    </li>
  <li class="list-group-item">Publicado por         :    <?php echo $_users[$_productos[$_GET['id']]['COD_USU']]['NOM_USU'];?><span> </span><?php echo $_users[$_productos[$_GET['id']]['COD_USU']]['APE_USU'];?>    </li>



</ul>




            </blockquote>



            <br>
          <a href="?view=">  <button type="submit" class="btn btn-primary">Notificar interes</button></a>

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
