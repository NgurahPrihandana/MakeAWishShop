     <!-- banner -->
     <section class="banner mt-1" style="margin-top: 5rem;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 col-sm-12 d-flex flex-column align-items-center justify-content-center f-poppins">
                     <div class="text-banner d-flex flex-column align-items-center justify-content-center" data-aos="zoom-in" data-aos-duration="800">
                         <h1 class="text-bold text-center">Jack Garment & Make A Wish Shop</h1>
                         <div class="f-quicksand">
                             <h2 class="text-center">High Quality Product <br> & <br>Highly Experienced Worker</h2>
                         </div>
                         <div class="text-center">
                             <a href="#designer" class="btn btn-pink mt-2 text-white f-poppins">
                                 Explore Now
                             </a>
                         </div>
                     </div>
                     <!-- card -->
                     <div class="row card-flex row-cols-1 row-cols-md-3">
                         <div class="col-sm-4 col-12 p-1" data-aos="fade-right" data-aos-duration="800">
                             <div class="card m-xs-2 text-center h-100 card-banner">
                                 <div class="card-body">
                                     <h5 class="card-title ">WORLDWIDE DELIVERY</h5>
                                     <img src="<?= BASEURL ?>/assets/images/icon/world-banner.svg" alt="">
                                     <p class="card-text f-quicksand">We accept and able to deliver our services for anyone
                                         all around the globe</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-4 p-1">
                             <div class="card text-center h-100 card-banner" data-aos="fade-up" data-aos-duration="800">
                                 <div class="card-body">
                                     <h5 class="card-title">SECURE PAYMENTS & PRIVACY</h5>
                                     <img src="<?= BASEURL ?>/assets/images/icon/lock-banner.svg" alt="">
                                     <p class="card-text f-quicksand">All the design or payments that our customer owns
                                         will be kept securely</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-4 p-1">
                             <div class="card text-center h-100 card-banner" data-aos="fade-left" data-aos-duration="800">
                                 <div class="card-body">
                                     <h5 class="card-title">SIMPLE RETURN</h5>
                                     <img src="<?= BASEURL ?>/assets/images/icon/delivery-banner.svg" alt="">
                                     <p class="card-text f-quicksand">We will guarantee that our products will be returned and fixed without anycomplicated method</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- end-card -->
                 </div>
                 <div class="col-lg-4 img d-flex align-items-center justify-content-center">

                 </div>
             </div>
         </div>
     </section>
     <!-- end-banner -->
     <div class="container">
         <!-- top-product -->
         <br>
         <section class="top-product mt-4 text-center" id="designer">
             <h1 class="f-poppins">What Our Designer Say</h1>
             <br><br>
             <div class="row mt-2">
                 <!--card-best-dress-->
                 <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center">
                     <div class="card border-0 card-best-dress-container" data-aos="fade-right" data-aos-duration="1000">
                         <img src="<?= BASEURL ?>/assets/images/best-dress.png" class="card-img-top" alt="...">
                         <div class="card-body">
                             <div class="card card-best-dress border-0">
                                 <div class="card-body">
                                     <h5 class="card-title f-poppins">PICK YOUR BEST DRESS</h5>
                                     <p class="card-text f-quicksand">See our Featured Product <br>or go to our Product Page.</p>
                                     <a href="<?= BASEURL ?>/product/index" class="btn btn-pink mt-2 text-white f-poppins">
                                         See Product
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end-card-best-dress -->
                 <div class="col-lg-4  offset-lg-2 col-12 p-3 offset-lg-2 d-flex align-items-center justify-content-center">
                     <div class="card aurel-card" data-aos="fade-left" data-aos-duration="1000">
                         <!-- <h4 class="f-poppins pt-3 pb-2">Andrea</h4> -->
                         <img src="<?= BASEURL ?>/assets/images/aurel-img.png" class="m-auto" width="100%" alt="...">
                         <div class="card-body">
                             <p>Dress is mostly use by women in <br>
                                 special occation, so it should be <br>
                                 beautiful and elegant.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
     <!-- end-top-product -->
     <br><br><br>
     <!-- deals-of-the-month -->
     <section class="deals-of-the-month bg-pink-secondary" style="min-height: 800px;" data-aos="fade-up" data-aos-duration="900">
         <div class="row py-5">
             <div class="col-md-12 deals-of-the-month d-flex flex-column justify-content-center align-items-center">
                 <h1 style="font-size: 2rem;" class="f-poppins">Featured Products</h1>
                 <p class="f-quicksand"><?= count($data['featured_product'])?> Featured Products are Available</p>
                 <br><br>
             </div>
             <div class="col-md-12">
                 <!-- caraousel -->
                 <!-- <div class="slider owl-carousel">
                         <div class="card">
                             <div class="img">
                                 <img src="<?= BASEURL ?>/assets/images/cr-1.png" alt="" class="pb-2">
                                 <div class="content-cr">
                                     <h1>$.500,00</h1>
                                     <p>Bermuda Dress</p>
                                     <button class="btn btn-pink mt-2 text-white f-poppins">
                                         Buy Now
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="card">
                             <div class="img">
                                 <img src="<?= BASEURL ?>/assets/images/cr-1.png" alt="" class="pb-2">
                                 <div class="content-cr">
                                     <h1>$.100,00</h1>
                                     <p>Bermuda Dress</p>
                                     <button class="btn btn-pink mt-2 text-white f-poppins">
                                         Buy Now
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div> -->
                 <div class="container">
                     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                         <div class="carousel-inner">
                             <?php foreach($data['featured_product'] as $index => $p ) :?>
                             <div class="carousel-item <?=$index == 0 ? "active" : ""?>">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="img-detail">
                                             <img src="<?= BASEURL ?>/assets/images/product/<?= $p['gambar_product'] ?>" alt="" />
                                         </div>
                                     </div>
                                     <div class="col-md-6 d-flex flex-column justify-content-center">
                                         <h1 class="f-poppins"><?= $p['nama_product'] ?></h1>
                                         <p class="f-quicksand" style="margin-left: 2px">
                                             Category : <?= $p['kategori'] ?></p>
                                         <p class="f-quicksand" style="margin-left: 2px">
                                             Size <?= $p['size'] ?>
                                         </p>
                                         <p class="f-quicksand" style="margin-left: 2px">
                                             <?= $p['deskripsi_product'] ?>
                                         </p>
                                         <p style="font-weight: bold; font-size: 1.3rem;">$.<?= $p['harga_product'] ?>,00</p>
                                         <a href="https://wa.me/6281236796214?text=Saya%20tertarik%20untuk%20membeli%20<?= $p['nama_product'] ?>" class="btn-detail-product btn-1-detail-product">
                                             <svg>
                                                 <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                             </svg>
                                             Buy Product
                                         </a>
                                     </div>
                                 </div>
                                 <!-- <img src="..." class="d-block w-100" alt="..."> -->
                                </div>
                                <?php endforeach;?>
                         </div>
                         <button class="carousel-control-prev prev-button" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                         </button>
                     </div>
                 </div>
                 <!-- end-caraousel -->
             </div>
         </div>

     </section>

     <!-- <div class="container">
         <section class="top-product">
         <div class="row">
            <div class="MultiCarousel" data-items="1,3,4,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <p class="lead">Multi Item Carousel</p>
                            <p>₹ 1</p>
                            <p>₹ 6000</p>
                            <p>50% off</p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
         </section>

     </div> -->

     <!-- <section class="list-product container mt-5">
             <div class="row">
                 <div class="col-lg-3 col-md-6 mt-3">
                     <div class="card home-shadow-product" style="width: 100%;" data-aos="fade-right" data-aos-duration="1000">
                         <img src="<?= BASEURL ?>/assets/images/product.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Lisa Tunic</h5>
                             <div class="d-flex justify-content-between">
                                 <div class="price">$500</div>
                                 <div class=""></div>
                                 <a href="detail-product.html" class="btn btn-pink">Buy Now</a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6 mt-3">
                     <div class="card home-shadow-product" style="width: 100%;" data-aos="fade-up-right" data-aos-duration="800">
                         <img src="<?= BASEURL ?>/assets/images/product.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Cardia Dress</h5>
                             <div class="d-flex justify-content-between">
                                 <div class="price">$500</div>
                                 <div class=""></div>
                                 <button class="btn btn-pink">Buy Now</button>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6 mt-3">
                     <div class="card home-shadow-product" style="width: 100%;" data-aos="fade-up-left" data-aos-duration="800">
                         <img src="<?= BASEURL ?>/assets/images/product.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Coral Jumpsuit</h5>
                             <div class="d-flex justify-content-between">
                                 <div class="price">$500</div>
                                 <div class=""></div>
                                 <button class="btn btn-pink">Buy Now</button>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6 mt-3">
                     <div class="card home-shadow-product" style="width: 100%;" data-aos="fade-left" data-aos-duration="1000">
                         <img src="<?= BASEURL ?>/assets/images/product.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Luna Skirt</h5>
                             <div class="d-flex justify-content-between">
                                 <div class="price">$500</div>
                                 <div class=""></div>
                                 <button class="btn btn-pink">Buy Now</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section> -->
     <!-- end-deals-of-the-month -->
     <div class="container">
         <section class="container customer-review mt-5">
             <h1 class="text-center pt-4 f-poppins">Customer Review</h1>
             <br>
             <div class="row">
                 <?php foreach ($data['review'] as $index => $r) : ?>
                     <div class="col-lg-4 text-center" <?= $index == 0 ? 'data-aos="fade-right"' : '' ?> <?= $index == 1 ? 'data-aos="fade-up"' : '' ?> <?= $index == 2 ? 'data-aos="fade-left"' : '' ?> data-aos-duration="800">
                         <article>
                             <figure>
                                 <img src="<?= BASEURL ?>/assets/images/review/<?= $r['img_profile'] ?>" />
                             </figure>

                             <div>
                                 <p>
                                     <?= $r['review'] ?>
                                 </p>
                                 <h1>
                                     <?= $r['name'] ?>
                                 </h1>
                             </div>
                         </article>
                     </div>
                 <?php endforeach; ?>


             </div>
         </section>
     </div>

     <script>
        //  $(".slider").owlCarousel({
        //      loop: false,
        //      autoplay: false,
        //      autoplayTimeout: 2000, //2000ms = 2s;
        //      autoplayHoverPause: true,
        //  });

         $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
     </script>