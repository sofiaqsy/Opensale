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

















  <?php
    if(isset($_GET['success'])) {
      echo '<div class="alert alert-dismissible alert-success">
        <strong>Activado!</strong> tu usuario ha sido activado correctamente.
      </div>';
    }

    if(isset($_GET['error'])) {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> no se ha podido activar tu usuario.
      </div>';
    }
    ?>


  <div class="row container">

      <?php
          if(isset($_SESSION['app_id'])) {
            echo '
            <div class="pull-right">
              <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                <a class="mbr-buttons__btn btn btn-danger" href="?view=productos">GESTIONAR PRODUCTOS</a>
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
            <br><!--salto de linea -->
        <div class="grid_1_of_2 images_1_of_2">
          Tipos de Celulares
        </div>
            <br><!--salto de linea -->


        <script>
        $(document).ready(function(){

          $('#marca').change(function() {


            var id=$('#marca').val();
            $('#modelo').load('?view=datos&mode=combo&id='+id);
            $('#poreleccion').load('?view=datos&mode=mostrar&id='+id);



        });
              });

        </script>

        <select class="form-control" name='marca' id='marca'>
            <?php
            if(false != $_tipos) {
                echo '<option value="OpMarcaTodos">TODOS</option>';
              foreach($_tipos as $id_tipo => $array_tipo) {
                echo '<option value="'.$id_tipo.'">'.$_tipos[$id_tipo]['DES_TIPO'].'</option>';
              }
            }else{
                echo '<option value="0">No existen marcas</option>';
            }
            ?>
        </select>





            <br> <!--salto de linea -->
    <div class="grid_1_of_2 images_1_of_2">
      Modelo
    </div>
            <br> <!--salto de linea -->

      <div >
        <select class='form-control' name='marca' id='modelo'>
          <option value="OpModeloTodos">TODOS</option>
        </select>
      </div>


    </div>
  </div>
  <!-- fin de la  seccion cabeceza 1-->
<!-- inicio de la  seccion cabeceza 2-->
    <div class="col-md-8">
      Productos




      <div class="section group" id="poreleccion" name="poreleccion">
        <?php foreach($_productos as $id_producto => $content_array) :?>

              <div class="grid_1_of_3 images_1_of_3">
                <a href="?view=detalles&id=<?php echo $id_producto?>">
                  <img src="<?php echo CARP_IMG ?>img3.jpg" title="Adamant an Industrial Category Flat Bootstrap Responsive Web Template" alt="Adamant an Industrial Category Flat Bootstrap Responsive Web Template Mobile website template Free">
                  <h2><?php echo $_tipos[$_modelos[$_productos[$id_producto]['COD_MOD']]['COD_MAR']]['DES_TIPO'] ?>- <?php echo $_modelos[$_productos[$id_producto]['COD_MOD']]['DES_MOD'] ?><br>S/<?php echo $_productos[$id_producto]['PRE_PROD'] ?>.00</h2>
                </a>
          </div>
        <?php endforeach; ?>
      </div>



      </div>




</section>

<!-- fin de la  seccion cabeceza 2-->
<!-- footer, llama a html index/overall/footer.php-->
<?php include(HTML_DIR . 'overall/footer.php'); ?>
</body>
<!--fin de cuerpo-->
</html>
