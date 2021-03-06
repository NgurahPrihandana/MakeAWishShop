 <!-- Sidenav -->
 <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
     <div class="scrollbar-inner">
         <!-- Brand -->
         <div class="sidenav-header d-flex align-items-center">
             <a class="navbar-brand" href="<?=BASEURL?>/admin/index">
                 <img src="<?=BASEURL?>/assets/images/icon/Fashion-logo.png" width="250px" height="100%" style="max-height: 5rem !important;" class="navbar-brand-img" alt="...">
             </a>
             <div class="ml-auto">
                 <!-- Sidenav toggler -->
                 <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                     <div class="sidenav-toggler-inner">
                         <i class="sidenav-toggler-line"></i>
                         <i class="sidenav-toggler-line"></i>
                         <i class="sidenav-toggler-line"></i>
                     </div>
                 </div>
             </div>
         </div>
         <div class="navbar-inner">
             <!-- Collapse -->
             <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                 <!-- Nav items -->
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link <?= $data['set_active'] == "index" ? "active" : " " ?>" href="<?= BASEURL ?>/admin/index">
                             <i class="ni ni-calendar-grid-58 text-red"></i>
                             <span class="nav-link-text">Dashboard</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?= $data['set_active'] == "kategori" ? "active" : " " ?>" href="<?= BASEURL ?>/admin/kategori">
                             <i class="ni ni-tag text-green"></i>
                             <span class="nav-link-text">Kategori</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?= $data['set_active'] == "product" ? "active" : " " ?>" href=" <?= BASEURL; ?>/admin/product">
                             <i class="ni ni-bag-17 text-info"></i>
                             <span class="nav-link-text">Product</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?= $data['set_active'] == "message" ? "active" : " " ?>" href="<?= BASEURL; ?>/admin/message">
                             <i class="ni ni-email-83 text-red"></i>
                             <span class="nav-link-text">Message</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?= $data['set_active'] == "review" ? "active" : " " ?>" href="<?= BASEURL; ?>/admin/review">
                             <i class="ni ni-send text-red"></i>
                             <span class="nav-link-text">Review</span>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>