<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pengajuan Aplikasi</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
            if ($this->session->flashdata('pesan')) {

                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Perusahaan</th>
                    <th>Karyawan</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; 
                    foreach ($form_pengajuan as $key => $value){?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value->nama?></td>
                        <td><?= $value->perusahaan?></td>
                        <td><?= $value->karyawan?></td>
                        <td><?= $value->telepon?></td>
                        <td><?= $value->email?></td>
                        <td><?= $value->jabatan?></td>
                        
                            <td class="text-center">
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_form ?>"
                            ><i class="fas fa-trash"></i></button>
                            </td>
                     </tr>
                    <?php } ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    <!-- /.content -->


          <!-- modal delete -->

          <?php
       foreach ($form_pengajuan as $key => $value){
         ?>
<div class="modal fade" id="delete<?= $value->id_form ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->nama?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <h5>Apakah anda yakin akan menghapus data ini?</h5>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?= base_url('form_pengajuan/delete/' . $value->id_form);?>" type="submit" class="btn btn-outline-light">Delete</a>
            </div>
            <?php
            echo form_close('');
            ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php }?>
  
