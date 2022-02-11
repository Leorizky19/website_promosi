<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Service</h3>

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
                    <th width="30%">Text Header</th>
                    <th width="30%">Text</th>
                    <th>Icon</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; 
                    foreach ($service as $key => $value){?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value->text?></td>
                        <td><?= $value->texts?></td>
                        <td><?= $value->icon?></td>
                        
                            <td class="text-center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_service ?>"
                            ><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_service ?>"
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
              <h4 class="modal-title">Add Content</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('service/add');
            ?>

                <div class="form-group mb-4">
                    <label>Text Header</label>
                    <textarea class="form-control" id="text" name="text" cols="20"
		            rows="5" placeholder="Text Header" required></textarea>
                  </div>
                
                  <div class="form-group mb-4">
                    <label>Text</label>
                    <textarea class="form-control" id="texts" name="texts" cols="20"
		            rows="5" placeholder="Text" required></textarea>
                    </div>

                    <div class="form-group mb-4">
                    <label>Text</label>
                    <input class="form-control" id="icon" name="icon" placeholder="Icon" required>
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
       foreach ($service as $key => $value){
         ?>
<div class="modal fade" id="edit<?= $value->id_service ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Content Service</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('service/edit/' . $value->id_service);
            ?>

                <div class="form-group">
                    <label> Text Header </label>
                    <textarea type="text" name="text" cols="20"
		            rows="5" class="form-control" 
                    placeholder="Text Header" required><?= $value->text ?></textarea>
                  </div>
                
                  <div class="form-group">
                    <label> Text </label>
                    <textarea type="text" name="texts"cols="20"
		            rows="5" class="form-control" 
                    placeholder="Text" required><?= $value->texts?> </textarea>
                  </div>

                  <div class="form-group">
                    <label> Icon </label>
                    <input type="text" name="icon" id="icon" class="form-control" value="<?= $value->icon?>"
                    placeholder="Icon" required>
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
       foreach ($service as $key => $value){
         ?>
<div class="modal fade" id="delete<?= $value->id_service ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->text?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <h5>Apakah anda yakin akan menghapus data ini?</h5>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?= base_url('service/delete/' . $value->id_service);?>" type="submit" class="btn btn-outline-light">Delete</a>
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
  
