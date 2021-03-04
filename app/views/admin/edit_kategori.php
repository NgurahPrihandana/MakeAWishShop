<?php Flasher::flash()?>
  <!-- Header -->
  <div class="header pb-6">
      <div class="container-fluid">
          <div class="header-body">
              <div class="row align-items-center py-4">
                  <div class="col-lg-6 col-7">
                      <h6 class="h2 d-inline-block mb-0">Alternative</h6>
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                          <ol class="breadcrumb breadcrumb-links">
                              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Alternative</li> -->
                          </ol>
                      </nav>
                  </div>
                  <div class="col-lg-6 col-5 text-right">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
      <div class="row">
          <div class="col">
              <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                      <h3 class="mb-0">Edit Kategori</h3>
                  </div>
                  <!-- Card body -->
                  <div class="card-body">
                      <form action="<?= BASEURL ?>/admin/update_kategori" method="POST" enctype="multipart/form-data">
                          <div class="row">
                          <input type="hidden" value="<?=$data['spcKategori']['id_kategori']?>" name="id_kategori">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Kategori</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input kategori..." value="<?=$data['spcKategori']['kategori']?>" name="kategori">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Input Icon Kategori</label>
                                      <input type="file" class="form-control" id="exampleFormControlInput1" name="icon_kategori">
                                  </div>
                              </div>
                          </div>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Update Data</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>