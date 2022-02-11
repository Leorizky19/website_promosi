<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Address</h3>
                <div class="card-tools">
                  <button data-toggle="modal" data-target="#add" type="button" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i>
                  Add </button>
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
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; 
                    foreach ($address as $key => $value){?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value->alamat?></td>
                        <td><?= $value->email?></td>
                        <td><?= $value->telepon?></td>
                        
                            <td class="text-center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_address ?>"
                            ><i class="fas fa-edit"></i></button>
                            
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_address ?>"
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

     <!-- modal add -->
<div class="modal fade" id="add">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Address</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('address/add');
            ?>

                  <div class="form-group mb-4">
                    <label>Alamat</label>
                    <input class="form-control" id="alamat" name="alamat" placeholder="alamat" required>
                    </div>
                
                  <div class="form-group mb-4">
                    <label>Email</label>
                    <input class="form-control" id="email" name="email" placeholder="email" required>
                    </div>

                    <div class="form-group mb-4">
                    <label>Telepon</label>
                    <input class="form-control" id="telepon" name="telepon" placeholder="telepon" required>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Save</button>
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

       <!-- modal edit -->

       <?php
       foreach ($address as $key => $value){
         ?>
<div class="modal fade" id="edit<?= $value->id_address ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Address</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('address/edit/' . $value->id_address);
            ?>

                  <div class="form-group">
                    <label> Alamat </label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $value->alamat?>"
                    placeholder="Alamat" required>
                  </div>
                
                  <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" id="email" class="form-control" value="<?= $value->email?>"
                    placeholder="Email" required>
                  </div>

                  <div class="form-group">
                    <label> Telepon </label>
                    <input type="text" name="telepon" id="telepon" class="form-control" value="<?= $value->telepon?>"
                    placeholder="Telepon" required>
                  </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Save</button>
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


          <!-- modal delete -->

          <?php
       foreach ($address as $key => $value){
         ?>
<div class="modal fade" id="delete<?= $value->id_address ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->alamat?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <h5>Apakah anda yakin akan menghapus data ini?</h5>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?= base_url('address/delete/' . $value->id_address);?>" type="submit" class="btn btn-outline-light">Delete</a>
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
  
