    <!-- container -->
    <div class="container" style="margin-top: 5rem;">
      <!-- content -->
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="img-detail">
            <img src="<?=BASEURL?>/assets/images/product/<?=$data['spcProduct']['gambar_product']?>" width="100%" alt="" />
          </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h1 class="f-poppins"><?=$data['spcProduct']['nama_product']?></h1>
          <p class="f-quicksand" style="margin-left: 2px">
            Category : <?=$data['spcProduct']['kategori']?></p>
            <p class="f-quicksand" style="margin-left: 2px">
            Size <?=$data['spcProduct']['size']?>
        </p>
          <p class="f-quicksand" style="margin-left: 2px">
            <?=$data['spcProduct']['deskripsi_product']?>
          </p>
          <p style="font-weight: bold; font-size: 1.3rem;">$.<?=$data['spcProduct']['harga_product']?>,00</p>
          <a
            href="https://wa.me/6281236796214?text=Saya%20tertarik%20untuk%20membeli%20<?=$data['spcProduct']['nama_product'] ?>"
            class="btn-detail-product btn-1-detail-product"
          >
            <svg>
              <rect x="0" y="0" fill="none" width="100%" height="100%" />
            </svg>
            Buy Product
          </a>
        </div>
      </div>
      <!-- end-content -->
    </div>
    <!-- end-container -->