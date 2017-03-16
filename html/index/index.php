<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/topnav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <div class="row container">

    <?php
        if(isset($_SESSION['app_id']) ) {
          echo '
          <div class="pull-right">
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=productos">GESTIONAR PRODUCTOS</a>
            </li></ul></div>

          </div>
          ';
        }else{
          echo '
          <div class="pull-right">
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=productos">Subir un producto</a>
            </li></ul></div>

          </div>
          ';
        }
    ?>

    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
</div>

  <div class="row">
    <!-- inicio de la  seccion cabeceza 1-->
    <div class="col-md-4">

  <div class="section group">
     <br><div class="grid_1_of_2 images_1_of_2">
       Tipos de Celulares
     </div>

     <select class="form-control">
  <option>TODOS</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
<br>
<div class="grid_1_of_2 images_1_of_2">
Modelo
</div>

<select class="form-control">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>



    </div>
  </div>
  <!-- fin de la  seccion cabeceza 1-->

    <div class="col-md-8">
      Productos

      <div class="">
      <div class="section group">
        <div class="grid_1_of_3 images_1_of_3">
        <a href="#">
        <img src="views/app/images/productos/img3.jpg" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap Responsive Web Template Mobile website template Free">
        <h2>BLUE - S/30.00 <br> usuario</h2>
        </a>
        </div>

      <div class="grid_1_of_3 images_1_of_3">
      <a href="#">
      <img src="views/app/images/productos/img1.jpg" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap Responsive Web Template Mobile website template Free">
      <h2>BLUE S2</h2>
      </a>
      </div>
      <div class="grid_1_of_3 images_1_of_3">
      <a href="#">
      <img src="views/app/images/productos/img2.jpg" title="Personal Login Form Responsive Widget Template" alt="Personal Login Form Responsive Widget Template Mobile website template Free">
      <h2>SAMSUNG GALAXY S3</h2>
      </a>
      </div>
      <div class="grid_1_of_3 images_1_of_3">
      <a href="#">
      <img src="views/app/images/productos/img2.jpg" title="Personal Login Form Responsive Widget Template" alt="Personal Login Form Responsive Widget Template Mobile website template Free">
      <h2>SAMSUNG GALAXY A1</h2>
      </a>
      </div>
      <div class="clear"></div>



</section>





<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
