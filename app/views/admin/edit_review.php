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
                              <li class="breadcrumb-item"><a href="#">Review</a></li>
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
                      <h3 class="mb-0">Edit Review</h3>
                  </div>
                  <!-- Card body -->
                  <div class="card-body">
                      <form action="<?= BASEURL ?>/admin/update_review" method="POST" enctype="multipart/form-data">
                          <div class="row">
                          <input type="hidden" value="<?=$data['spcReview']['id_review']?>" name="id_review">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Nama</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input nama..." value="<?=$data['spcReview']['name']?>" name="name">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Input Image Profile</label>
                                      <input type="file" class="form-control" id="exampleFormControlInput1" name="img_profile">
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Review</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="review" id=""><?=$data['spcReview']['review']?></textarea>
                                  </div>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Update Data</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>