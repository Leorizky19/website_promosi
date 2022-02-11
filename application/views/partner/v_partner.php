<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Partner</h3>

                <div class="card-tools">
                  <a href="<?= base_url('partner/add');?>"  type="button" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i>
                  Add </a>
                </div>
                <!-- /.card-tools -->
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
                    <th>Nama Partner</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; 
                    foreach ($partner as $key => $value){?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value->nama_partner?></td>
                        <td class="text-center"><img src="<?= base_url('upload/partner/') 
                        . $value->image ?>" class="img-thumbnail" alt="" width="100"></td>
                            <td class="text-center">
                            <a href="<?= base_url('partner/edit/' . $value->id_partner)?>" class="btn btn-warning btn-sm" 
                            ><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_partner ?>"
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


<!-- Modal Delete--> 
    <
    <?php
       foreach ($partner as $key => $value){
         ?>
<div class="modal fade" id="delete<?= $value->id_partner ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->nama_partner?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <h5>Apakah anda yakin akan menghapus data ini?</h5>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?= base_url('partner/delete/' . $value->id_partner);?>" type="submit" class="btn btn-outline-light">Delete</a>
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