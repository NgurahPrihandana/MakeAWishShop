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
             <a href="#" class="btn btn-sm btn-neutral">New</a>
             <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
             <h3 class="mb-0">Pengiriman</h3>
             <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalCenter">Tambah Kategori</button>
           </div>
           <div class="table-responsive py-4">
             <table class="table table-flush" id="datatable-basic">
               <thead class="thead-light">
                 <tr>
                   <th>No</th>
                   <th>Kategori</th>
                   <th>Icon Kategori</th>
                   <th>Aksi</th>
                 </tr>
               </thead>
               <tfoot>
                 <tr>
                   <th>No</th>
                   <th>Kategori</th>
                   <th>Icon Kategori</th>
                   <th>Aksi</th>
                 </tr>
               </tfoot>
               <tbody>
                 <tr>
                   <td>1</td>
                   <td>1</td>
                   <td>1</td>
                   <td>1</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <form action="<?= BASEURL ?>/home/tambah_pengiriman" method="POST">
         <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengiriman</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <div class="card">
                 <!-- Card body -->
                 <div class="card-body">
                   <div class="form-group">
                     <label class="form-control-label" for="exampleFormControlInput1">Kode Pengiriman</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." name="kode_pengiriman">
                   </div>
                   <div class="form-group">
                     <label class="form-control-label" for="exampleFormControlInput1">Icon Kategori</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." name="kode_pengiriman">
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