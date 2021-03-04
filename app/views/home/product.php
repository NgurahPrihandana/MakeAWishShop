<!-- container -->
<div class="container">
  <!-- banner-product -->
  <section class="product-banner d-flex align-items-center justify-content-center">
    <h1 class="f-poppins text-white">PRODUCT</h1>
  </section>
  <!-- end-banner -->

  <!-- navigation -->
  <div class="navigation-product mt-2">
    <p>Home > Product</p>
  </div>
  <!-- end-navigation -->

  <!-- category -->
  <section class="category">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-4">
    <div class="col">
        <a href="" style="text-decoration: none;">
          <div class="card h-100 active" data-aos="zoom-in" data-aos-delay="100">
            <img src="<?= BASEURL ?>/assets/images/icon/bag.png" class=" m-auto mt-4" width="30%" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center f-poppins">All Type</h5>
            </div>
          </div>
        </a>
      </div>
    <?php foreach($data['kategori'] as $k) :?>
      <div class="col">
        <a href="" style="text-decoration: none;">
          <div class="card h-100 active" data-aos="zoom-in" data-aos-delay="100">
            <img src="<?= BASEURL ?>/assets/images/icon/<?=$k['icon_kategori']?>" class=" m-auto mt-4" width="30%" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center f-poppins"><?=$k['kategori']?></h5>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach;?>
    </div>
    <!-- end-category -->
  </section>

  <!-- search -->
  <div class="search mt-5">
    <form action="" class="text-center form d-flex justify-content-center">
      <input class="w-50 form-control" type="text" placeholder="Search Here..."/>
    </form>
  </div>
  <!-- end-search -->

  <!-- product -->
  <section class="list-product container mt-3">
    <div class="row f-poppins">
    <?php foreach($data['product'] as $p) :?>
      <div class="col-lg-3 col-md-6 mt-3">
        <div class="card home-shadow-product h-100" data-aos="flip-right">
          <img src="<?= BASEURL ?>/assets/images/product.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><?=$p['nama_product']?></h5>
            <div class="d-flex justify-content-between">
              <div class="price">$<?=$p['harga_product']?></div>
              <div class=""></div>
              <a href="detail-product.html" class="btn btn-pink">See Detail</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>


  </section>
  <!-- end-prduct -->

  <!-- season -->
  <section class="product-season">
    <h1 class="text-center mt-5 text-bold">Season</h1>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="season-card margin-season-card-responsive spring-card" data-aos="fade-right">
          <div class="content">
            <h2 class="title">SPRING</h2>
            <p class="copy">
              Check out all of these gorgeous mountain trips with beautiful
              views of, you guessed it, the mountains
            </p>
            <a href="" class="btn-season btn-1">
              <svg>
                <rect x="0" y="0" fill="none" width="100%" height="100%" />
              </svg>
              See Product
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="season-card summer-card" data-aos="fade-left">
          <div class="content">
            <h2 class="title">SUMMER</h2>
            <p class="copy">
              Check out all of these gorgeous mountain trips with beautiful
              views of, you guessed it, the mountains
            </p>
            <a href="https://twitter.com/Dave_Conner" class="btn-season btn-1">
              <svg>
                <rect x="0" y="0" fill="none" width="100%" height="100%" />
              </svg>
              See Product
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-6">
        <div class="season-card margin-season-card-responsive fall-card" data-aos="fade-right">
          <div class="content">
            <h2 class="title">FALL</h2>
            <p class="copy">
              Check out all of these gorgeous mountain trips with beautiful
              views of, you guessed it, the mountains
            </p>
            <a href="https://twitter.com/Dave_Conner" class="btn-season btn-1">
              <svg>
                <rect x="0" y="0" fill="none" width="100%" height="100%" />
              </svg>
              See Product
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="season-card winter-card" data-aos="fade-left">
          <div class="content">
            <h2 class="title">WINTER</h2>
            <p class="copy">
              Check out all of these gorgeous mountain trips with beautiful
              views of, you guessed it, the mountains
            </p>
            <a href="https://twitter.com/Dave_Conner" class="btn-season btn-1">
              <svg>
                <rect x="0" y="0" fill="none" width="100%" height="100%" />
              </svg>
              See Product
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end-season -->

  <!-- category -->
  <!-- <section class="category">
        <h1 class="text-center mt-5 text-bold">Category</h1>
        <div class="row mt-4">
          <div class="col-md-5">
            <div class="season-card margin-season-card-responsive spring-card">
              <div class="content">
                <h2 class="title">SPRING</h2>
                <p class="copy">
                  Check out all of these gorgeous mountain trips with beautiful
                  views of, you guessed it, the mountains
                </p>
                <a
                  href=""
                  class="btn-season btn-1"
                >
                  <svg>
                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                  </svg>
                  See Product
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-7">
            <div class="season-card summer-card">
              <div class="content">
                <h2 class="title">SUMMER</h2>
                <p class="copy">
                  Check out all of these gorgeous mountain trips with beautiful
                  views of, you guessed it, the mountains
                </p>
                <a
                  href="https://twitter.com/Dave_Conner"
                  class="btn-season btn-1"
                >
                  <svg>
                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                  </svg>
                  See Product
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-5">
            <div class="season-card margin-season-card-responsive fall-card">
              <div class="content">
                <h2 class="title">FALL</h2>
                <p class="copy">
                  Check out all of these gorgeous mountain trips with beautiful
                  views of, you guessed it, the mountains
                </p>
                <a
                  href="https://twitter.com/Dave_Conner"
                  class="btn-season btn-1"
                >
                  <svg>
                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                  </svg>
                  See Product
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-7">
            <div class="season-card winter-card">
              <div class="content">
                <h2 class="title">WINTER</h2>
                <p class="copy">
                  Check out all of these gorgeous mountain trips with beautiful
                  views of, you guessed it, the mountains
                </p>
                <a
                  href="https://twitter.com/Dave_Conner"
                  class="btn-season btn-1"
                >
                  <svg>
                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                  </svg>
                  See Product
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> -->
  <!-- end-category -->
</div>
<!-- end-container -->