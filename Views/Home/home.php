<?php 
headerAdmin($data); 
//Slider traer Datos
$arrSlider = $data['slider'];
$arrCategories = $data['categories'];
$arrProduct = $data['products'];

?>
<section id="hero">

<div class="container-xl">

  <div class="row gy-4">			
    <!--Main Menu-->
    <div class="col-lg-8">	
      <!-- featured post large -->
      <div id="cont-sliders" class="row post-carousel-twoCol post-carousel">
        <!-- Slide 1 -->
        <?php
        for ($i=0; $i < count($arrSlider) ; $i++) { 
          $title_slider = $arrSlider[$i]['title'];
          $tag_slider = $arrSlider[$i]['tag'];
        ?>
        <div class="post post-over-content col-md-6">
          <div class="details clearfix">
            <a href="category.html" class="category-badge"><?php echo $tag_slider;?></a>
            <h4 class="post-title"><a href="blog-single.html"><?php echo $title_slider;?></a></h4>
            <ul class="meta list-inline mb-0">
              <li class="list-inline-item"><a href="#">Katen Doe</a></li>
              <li class="list-inline-item">29 March 2021</li>
            </ul>
          </div>
          <a href="blog-single.html">
            <div class="thumb rounded">
              <div class="inner">
                <img src="<?= media();?>/images/sliders/slider-1.jpg" alt="thumb" />
              </div>
            </div>
          </a>
        </div>               
        <?php } ?>

      </div>

    </div>
                    
    <!--Slider Categorias-->

    <div class="col-lg-8 sinNada">
      <div class="cont-categorias widget rounded">
        <div class="widget-header">
          <h3 class="widget-title">Categorias</h3>
        </div>
        <div class="widget-content">
          <div class="post-carousel-widget">
            <!-- Category -->
            <?php 
            for ($i=0; $i < count($arrCategories) ; $i++) { 
              $id_category = $arrCategories[$i]['id_category'];
              $name_category = $arrCategories[$i]['name'];
            ?>
              <div class="categ-div post post-carousel">
                <ul class="nav nav-tabs nav-pills nav-fill" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button onclick="abrirCategory(<?=$id_category;?>);" aria-controls="<?= $name_category;?>" class="btn-category nav-link" id="<?= "#".$name_category."-tab"?>" role="tab" type="button">
                      <?php echo $name_category;?>
                    </button>
                  </li>
                </ul>
              </div>
            <?php } ?>
            <!-- Fin Category -->
          </div>
        </div>		
      </div>
    </div>
     <!-- Fin Category -->

    <!-- Listado de Productos -->
    <div class="col-lg-4">
      <!-- post tabs -->
      <div class="post-tabs rounded bordered">
        <!-- tab navs -->
        <!-- widget post carousel -->
        <!-- tab contents -->
        <div class="tab-content" id="postsTabContent">
          <!-- loader -->
          <div class="lds-dual-ring"></div>
          <!-- popular posts -->
          <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="cont-products" role="tabpanel">
            <?php 
              for ($i=0; $i < count($arrProduct) ; $i++) { 
                $id_product = $arrProduct[$i]['id_product'];
                $name_product = $arrProduct[$i]['name'];
                $description_product = $arrProduct[$i]['description'];
                $img_product = $arrProduct[$i]['url_img'];
            ?>
              <!-- Product -->
              <div class="post post-list-sm circle">
                <div class="thumb circle">
                  <a href="blog-single.html">
                    <div id="url_img" class="inner">
                      <img src="<?= media();?>/images/products/<?= $img_product;?>" alt="post-title" />
                    </div>
                  </a>
                </div>
                <div class="details clearfix">
                  <h6 id="title_product" class="post-title my-0"><a href="blog-single.html"><?= $name_product;?></a></h6>
                  <ul class="meta list-inline mt-1 mb-0">
                    <li id="description_product" class="list-inline-item"><?= $description_product;?></li>
                  </ul>
                </div>
              </div>
              <!-- Fin Product -->
            <?php  }; ?>
          </div>
          <!-- recent posts -->

        </div>
      </div>
    </div>
    <!-- Listado de Productos -->

  </div>

</div>

</section>
<!--Boton Pedir-->
<div class="cont-btn-sticky">
    <button class="btn-sin-pedido">Sin pedidos (0)</button>
</div>

<?php footerAdmin($data); ?>
<?php scriptsAdmin($data); ?>

