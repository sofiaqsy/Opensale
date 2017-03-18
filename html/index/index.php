<html>
<!-- encabezado, llama a html index/overall/header.php-->
<?php include(HTML_DIR . 'overall/header.php'); ?>
<!-- comienzo del cuerpo-->
<body>
   <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>
   <!-- cuerpo, llama a html index/overall/topnav.php-->
<?php include(HTML_DIR . '/overall/topnav.php'); ?>
  <section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">
  <div class="row">
    <!-- inicio de la  seccion cabeceza 1-->
    <div class="col-md-4">
      <div class="section group">
            <br><!--salto de linea -->
        <div class="grid_1_of_2 images_1_of_2">
          Tipos de Celulares
        </div>
            <br><!--salto de linea -->
        <select class="form-control">
            <?php
            if(false != $_tipos) {
                echo '<option>TODOS</option>';
              foreach($_tipos as $id_tipo => $array_tipo) {
                echo '<option value="'.$id_tipo.'">'.$_tipos[$id_tipo]['DES_TIPO'].'</option>';
              }
            }else{
                echo '<option value="0">No existe categoría</option>';
            }
            ?>
        </select>
            <br> <!--salto de linea -->
    <div class="grid_1_of_2 images_1_of_2">
      Modelo
    </div>
            <br> <!--salto de linea -->
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
<!-- inicio de la  seccion cabeceza 2-->
    <div class="col-md-8">
      Productos
        <div class="">
          <div class="section group">
            <div class="grid_1_of_3 images_1_of_3">
              <a href="#">
                <img src="views/app/images/productos/img3.jpg" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap Responsive Web Template Mobile website template Free">
                <h2>BLUE</h2>
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

      <div class="row categorias_con_foros categorias">
        <div class="col-sm-12">
            <div class="row titulo_categoria">Categorias </div>

            <div class="row cajas">
              <div class="col-md-2">
                <center>
              </center>

              </div>
              <div class="col-md-10">
                <blockquote>

                </blockquote>
                <hr />

              </div>
            </div>
        </div>
>>>>>>> 2deed161ea1b3a337041037043ef9a65f08e13f5
      </div>

    </div>
    <div class="col-md-8">

      <div class="features_items">
          <h2 class="titleproducto text-center">Productos</h2>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="views/app/images/productos/img3.jpg" alt="" />
                    <h2>$99</h2>
                    <p>Iphone 6s</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                  <div class="product-overlay">
                    <div class="overlay-content">
                      <h2>$56</h2>
                      <p>Iphone 6s</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                  </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>



      <div class="grid_1_of_3 images_1_of_3">
      </div>

      <div class="features_items">
          <h2 class="titleproducto text-center">Productos</h2>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="views/app/images/productos/img3.jpg" alt="" />
                    <h2>$99</h2>
                    <p>Iphone 6s</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                  <div class="product-overlay">
                    <div class="overlay-content">
                      <h2>$56</h2>
                      <p>Iphone 6s</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                  </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>

  </div>
</div>
</section>

<!-- fin de la  seccion cabeceza 2-->
<!-- footer, llama a html index/overall/footer.php-->
<?php include(HTML_DIR . 'overall/footer.php'); ?>
</body>
<!--fin de cuerpo-->
</html>
