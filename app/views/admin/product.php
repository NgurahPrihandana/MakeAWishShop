<?php Flasher::flash(); ?>
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
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Product</h3>
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalCenter">Tambah Product</button>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Product</th>
                                <th>Kategori Product</th>
                                <th>Tipe Product</th>
                                <th>Size Product</th>
                                <th>Harga Product</th>
                                <th>Gambar Product</th>
                                <th>Deskripsi Product</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Product</th>
                                <th>Kategori Product</th>
                                <th>Tipe Product</th>
                                <th>Size Product</th>
                                <th>Harga Product</th>
                                <th>Gambar Product</th>
                                <th>Deskripsi Product</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data['product'] as $p) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $p['nama_product'] ?></td>
                                    <td><?= $p['kategori'] ?></td>
                                    <td><?= $p['tipe'] ?></td>
                                    <td><?= $p['size'] ?></td>
                                    <td>$.<?= $p['harga_product'] ?>,00</td>
                                    <td><img src="<?= BASEURL; ?>/assets/images/product/<?= $p['gambar_product'] ?>" width="50px" alt=""></td>
                                    <td><?= substr($p['deskripsi_product'], 0, 50) ?></td>
                                    <td>
                                        <a href="<?= BASEURL ?>/admin/edit_product/<?= $p['id_product']; ?>" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <a href="<?= BASEURL ?>/admin/hapus_product/<?= $p['id_product']; ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <form action="<?= BASEURL ?>/admin/tambah_product" method="POST" enctype="multipart/form-data">
            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Nama Product</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input nama product..." name="nama_product">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Kategori Product</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
                                                <option disabled hidden selected>Pilih Kategori</option>
                                                <?php foreach ($data['kategori'] as $k) : ?>
                                                    <option class="text-success" value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
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
                                                    <option value="<?= $t['id_tipe'] ?>"><?= $t['tipe'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Size</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input size product..." name="size">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlInput1">Harga Product</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input harga product..." name="harga_product">
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
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_product" id=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>