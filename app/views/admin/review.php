<?php Flasher::flash() ?>
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
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Review</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Review</th>
                                <th>Profile Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Review</th>
                                <th>Profile Image</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($data['review'] as $r) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $r['name']; ?></td>
                                    <td><?= substr($r['review'], 0, 50); ?>...</td>
                                    <td><img src="<?= BASEURL; ?>/assets/images/review/<?= $r['img_profile'] ?>" width="50px" alt=""></td>
                                    <td>
                                        <a href="<?= BASEURL ?>/admin/edit_review/<?= $r['id_review']; ?>" class="table-action" data-toggle="tooltip" data-original-title="Edit review">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>