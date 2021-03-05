<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="position: fixed; top:0; left:0; width: 100%; z-index: 99; background: white;">
    <div class="container">
        <a class="navbar-brand" href="#">Make A Wish</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-makeAwish" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item nav-link <?= $data['set_active'] == "home" ? "active" : " " ?>">
                    <a class="nav-link <?= $data['set_active'] == "home" ? "active" : " " ?>" aria-current="page" href="<?=BASEURL?>/home/index">Home</a>
                    <div class="underline-bar"></div>
                </li>
                <li class="nav-item nav-link <?= $data['set_active'] == "product" ? "active" : " " ?>">
                    <a class="nav-link <?= $data['set_active'] == "product" ? "active" : " " ?>" href="<?=BASEURL?>/product/index">Products</a>
                    <div class="underline-bar"></div>
                </li>
                <li class="nav-item nav-link <?= $data['set_active'] == "service" ? "active" : " " ?>">
                    <a class="nav-link <?= $data['set_active'] == "service" ? "active" : " " ?>" href="<?=BASEURL?>/service/index">Service</a>
                    <div class="underline-bar"></div>
                </li>
                <li class="nav-item nav-link <?= $data['set_active'] == "about" ? "active" : " " ?>">
                    <a class="nav-link <?= $data['set_active'] == "about" ? "active" : " " ?>" href="<?=BASEURL?>/about/index">About Us</a>
                    <div class="underline-bar"></div>
                </li>
                <li class="nav-item nav-link <?= $data['set_active'] == "message" ? "active" : " " ?>">
                    <a class="nav-link <?= $data['set_active'] == "message" ? "active" : " " ?>" href="<?=BASEURL?>/message/index">Contact Us</a>
                    <div class="underline-bar"></div>
                </li>
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item nav-link">
                        <a href=""><img src="<?=BASEURL?>/assets/images/icon/instagram.svg" alt=""></a>
                    </li>
                    <li class="nav-item nav-link">
                        <a href=""><img src="<?=BASEURL?>/assets/images/icon/facebook.svg" alt=""></a>
                    </li>
                    <li class="nav-item nav-link">
                        <a href=""><img src="<?=BASEURL?>/assets/images/icon/twitter.svg" alt=""></a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>
<!-- end-navbar -->