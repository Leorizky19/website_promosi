<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pricing</h3>

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
                    <th>Header</th>
                    <th width="35%">Text</th>
                    <th>Harga</th>
                    <th>Link</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; 
                    foreach ($pricing as $key => $value){?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value->header?></td>
                        <td><?= $value->text?></td>
                        <td><?= $value->harga?></td>
                        <td><?= $value->link?></td>
                            <td class="text-center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_pricing ?>"
                            ><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_pricing ?>"
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
              <h4 class="modal-title">Add Pricing</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('pricing/add');
            ?>

                <div class="form-group mb-4">
                    <label>Header</label>
                    <input class="form-control" id="header" name="header" placeholder="Header" required>
                  </div>

                  <div class="form-group mb-4">
                    <label>Text</label>
                    <textarea class="form-control" id="text" rows="5" cols="20"
                    name="text" placeholder="Text" required></textarea>
                  </div>
                
                  <div class="form-group mb-4">
                    <label>Harga</label>
                    <input class="form-control" id="harga" name="harga" placeholder="Harga" required>
                  </div>

                  <div class="form-group mb-4">
                    <label>Link</label>
                    <input class="form-control" id="link" name="link" placeholder="Link" required>
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
       foreach ($pricing as $key => $value){
         ?>
<div class="modal fade" id="edit<?= $value->id_pricing ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Pricing</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('pricing/edit/' . $value->id_pricing);
            ?>

                <div class="form-group mb-4">
                    <label>Header</label>
                    <input class="form-control" id="header" name="header" value="<?= $value->header?>" placeholder="Header" required>
                  </div>
                
                  <div class="form-group mb-4">
                    <label>Text</label>
                    <textarea class="form-control" id="text" name="text" rows="5" cols="20"
                    placeholder="Text" required><?= $value->text?></textarea>
                  </div>

                  <div class="form-group mb-4">
                    <label>Harga</label></label>
                    <input class="form-control" id="harga" name="harga" value="<?= $value->harga?>" placeholder="Harga" required>
                  </div>

                  <div class="form-group mb-4">
                    <label>Link</label>
                    <input class="form-control" id="link" name="link" value="<?= $value->link?>" placeholder="link" required>
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
       foreach ($pricing as $key => $value){
         ?>
<div class="modal fade" id="delete<?= $value->id_pricing ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->header?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <h5>Apakah anda yakin akan menghapus data ini?</h5>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?= base_url('pricing/delete/' . $value->id_pricing);?>" type="submit" class="btn btn-outline-light">Delete</a>
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
  
