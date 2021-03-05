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
                              <li class="breadcrumb-item"><a href="#">Product</a></li>
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
                      <h3 class="mb-0">Edit Product</h3>
                  </div>
                  <!-- Card body -->
                  <div class="card-body">
                      <form action="<?= BASEURL ?>/admin/update_product/" method="POST" enctype="multipart/form-data">
                          <input type="hidden" value="<?=$data['spcProduct']['id_product']?>" name="id_product">
                          <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Nama Product</label>
                                            <input type="text" value="<?=$data['spcProduct']['nama_product']?>" class="form-control" id="exampleFormControlInput1" placeholder="Input nama product..." name="nama_product">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Kategori Product</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
                                                <option disabled hidden selected>Pilih Kategori</option>
                                                <?php foreach ($data['kategori'] as $k) : ?>
                                                    <option <?= $k['id_kategori'] == $data['spcProduct']['id_kategori'] ? "selected" : ""?> value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Tipe Product</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="id_tipe">
                                                <option disabled hidden selected>Pilih Tipe</option>
                                                <?php foreach ($data['tipe'] as $t) : ?>
                                                    <option <?= $t['id_tipe'] == $data['spcProduct']['id_tipe'] ? "selected" : ""?> value="<?= $t['id_tipe'] ?>"><?= $t['tipe'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Size Product</label>
                                            <input type="text" value="<?=$data['spcProduct']['size']?>" class="form-control" id="exampleFormControlInput1" placeholder="Input size product..." name="size">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Harga Product</label>
                                            <input type="number" value="<?=$data['spcProduct']['harga_product']?>" class="form-control" id="exampleFormControlInput1" placeholder="Input harga product..." name="harga_product">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Gambar Product</label>
                                            <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar_product">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Deskripsi Product</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_product" id=""><?=$data['spcProduct']['deskripsi_product']?></textarea>
                                        </div>
                                    </div>
                                </div>
                          <button type="submit" class="btn btn-primary">Update Data</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>