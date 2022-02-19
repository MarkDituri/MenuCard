<?php headerAdmin($data); ?>
<section id="hero">

<div class="container-xl">

  <div class="row gy-4">			
    <!--Main Menu-->
    <div class="col-lg-8">	
      <!-- featured post large -->
      <div class="row post-carousel-twoCol post-carousel">
        <!-- post -->
        <div class="post post-over-content col-md-6">
          <div class="details clearfix">
            <a href="category.html" class="category-badge">Inspiration</a>
            <h4 class="post-title"><a href="blog-single.html">See To Have A More Appealing Tattoo?</a></h4>
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
        <!-- post -->
        <div class="post post-over-content col-md-6">
          <div class="details clearfix">
            <a href="category.html" class="category-badge">Inspiration</a>
            <h4 class="post-title"><a href="blog-single.html">Feel Like A Pro With The Help Of These 7 Tips</a></h4>
            <ul class="meta list-inline mb-0">
              <li class="list-inline-item"><a href="#">Katen Doe</a></li>
              <li class="list-inline-item">29 March 2021</li>
            </ul>
          </div>
          <a href="blog-single.html">
            <div class="thumb rounded">
              <div class="inner">
                <img src="<?= media();?>/images/posts/inspiration-2.jpg" alt="thumb" />
              </div>
            </div>
          </a>
        </div>
        <!-- post -->
        <div class="post post-over-content col-md-6">
          <div class="details clearfix">
            <a href="category.html" class="category-badge">Inspiration</a>
            <h4 class="post-title"><a href="blog-single.html">Your Light Is About To Stop Being Relevant</a></h4>
            <ul class="meta list-inline mb-0">
              <li class="list-inline-item"><a href="#">Katen Doe</a></li>
              <li class="list-inline-item">29 March 2021</li>
            </ul>
          </div>
          <a href="blog-single.html">
            <div class="thumb rounded">
              <div class="inner">
                <img src="<?= media();?>/images/posts/inspiration-3.jpg" alt="thumb" />
              </div>
            </div>
          </a>
        </div>
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
            <!-- post -->
            <div class="categ-div post post-carousel">
              <ul class="nav nav-tabs nav-pills nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                  <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                    Hamburguesas
                  </button>
                </li>
              </ul>
            </div>
            <div class="categ-div post post-carousel">
              <ul class="nav nav-tabs nav-pills nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                  <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                    Pizza
                  </button>
                </li>
              </ul>
            </div>
            <div class="categ-div post post-carousel">
              <ul class="nav nav-tabs nav-pills nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                  <button aria-controls="popular" aria-selected="false" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">
                    Pastas
                  </button>
                </li>
              </ul>
            </div>
            <div class="categ-div post post-carousel">
              <ul class="nav nav-tabs nav-pills nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                  <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                    Bebidas sin Alcohol
                  </button>
                </li>
              </ul>
            </div>
            <div class="categ-div post post-carousel">
              <ul class="nav nav-tabs nav-pills nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                  <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                    Cervezas y mas
                  </button>
                </li>
              </ul>
            </div>
            <div class="categ-div post post-carousel">
              <ul class="nav nav-tabs nav-pills nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                  <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                    Vinos y espumantes
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>		
      </div>
    </div>


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
          <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular" role="tabpanel">
            <!-- post -->
            <div class="post post-list-sm circle">
              <div class="thumb circle">
                <a href="blog-single.html">
                  <div class="inner">
                    <img src="<?= media();?>/images/posts/tabs-1.jpg" alt="post-title" />
                  </div>
                </a>
              </div>
              <div class="details clearfix">
                <h6 class="post-title my-0"><a href="blog-single.html">Burger Americana</a></h6>
                <ul class="meta list-inline mt-1 mb-0">
                  <li class="list-inline-item">29 March 2021</li>
                </ul>
              </div>
            </div>
            <!-- post -->
            <div class="post post-list-sm circle">
              <div class="thumb circle">
                <a href="blog-single.html">
                  <div class="inner">
                    <img src="<?= media();?>/images/posts/tabs-2.jpg" alt="post-title" />
                  </div>
                </a>
              </div>
              <div class="details clearfix">
                <h6 class="post-title my-0"><a href="blog-single.html">Double Burger</a></h6>
                <ul class="meta list-inline mt-1 mb-0">
                  <li class="list-inline-item">29 March 2021</li>
                </ul>
              </div>
            </div>
            <!-- post -->
            <div class="post post-list-sm circle">
              <div class="thumb circle">
                <a href="blog-single.html">
                  <div class="inner">
                    <img src="<?= media();?>/images/posts/tabs-3.jpg" alt="post-title" />
                  </div>
                </a>
              </div>
              <div class="details clearfix">
                <h6 class="post-title my-0"><a href="blog-single.html">CHEESE BURGERTR</a></h6>
                <ul class="meta list-inline mt-1 mb-0">
                  <li class="list-inline-item">29 March 2021</li>
                </ul>
              </div>
            </div>
            <!-- post -->
            <div class="post post-list-sm circle">
              <div class="thumb circle">
                <a href="blog-single.html">
                  <div class="inner">
                    <img src="<?= media();?>/images/posts/tabs-4.jpg" alt="post-title" />
                  </div>
                </a>
              </div>
              <div class="details clearfix">
                <h6 class="post-title my-0"><a href="blog-single.html">15 Unheard Ways To Achieve Greater Walker</a></h6>
                <ul class="meta list-inline mt-1 mb-0">
                  <li class="list-inline-item">29 March 2021</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- recent posts -->

        </div>
      </div>
    </div>

  </div>

</div>

</section>
<?php footerAdmin($data); ?>
<?php scriptsAdmin($data); ?>