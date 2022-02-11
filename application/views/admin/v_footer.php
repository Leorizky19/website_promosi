<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Footer</h3>

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
                    <th>Kontak</th>
                    <th>Text</th>
                    <th>Text 2</th>
                    <th>Sosoal Media</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; 
                    foreach ($footer as $key => $value){?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value->kontak?></td>
                        <td><?= $value->text?></td>
                        <td><?= $value->texts?></td>
                        <td><?= $value->sosial_media?></td>
                            <td class="text-center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_footer ?>"
                            ><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_footer ?>"
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
              <h4 class="modal-title">Add Footer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('footer/add');
            ?>

                <div class="form-group mb-4">
                    <label>Kontak</label>
                    <textarea class="form-control" id="kontak" name="kontak" cols="20"
		            rows="5" placeholder="Kontak" required></textarea>
                  </div>
                  <div class="form-group mb-4">
                    <label>Text</label>
                    <textarea class="form-control" id="text" name="text" cols="20"
		            rows="5" placeholder="Text" required></textarea>
                    </div>
                
                  <div class="form-group mb-4">
                    <label>Text</label>
                    <textarea class="form-control" id="texts" name="texts" cols="20"
		            rows="5" placeholder="Text" required></textarea>
                    </div>

                    <div class="form-group mb-4">
                    <label>Sosial Media</label>
                    <textarea class="form-control" id="sosial_media" name="sosial_media" cols="20"
		            rows="5" placeholder="Sosial Media" required></textarea>
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
       foreach ($footer as $key => $value){
         ?>
<div class="modal fade" id="edit<?= $value->id_footer ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Footer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('footer/edit/' . $value->id_footer);
            ?>

<div class="form-group mb-4">
                    <label>Kontak</label>
                    <textarea class="form-control" id="kontak" name="kontak" cols="20"
		            rows="5" placeholder="Kontak" required><?= $value->kontak?></textarea>
                  </div>
                  <div class="form-group mb-4">
                    <label>Text</label>
                    <textarea class="form-control" id="text" name="text" cols="20"
		            rows="5" placeholder="Text" required><?= $value->text?></textarea>
                    </div>
                
                  <div class="form-group mb-4">
                    <label>Text</label>
                    <textarea class="form-control" id="texts" name="texts" cols="20"
		            rows="5" placeholder="Text" required><?= $value->texts?></textarea>
                    </div>

                    <div class="form-group mb-4">
                    <label>Sosial Media</label>
                    <textarea class="form-control" id="sosial_media" name="sosial_media" cols="20"
		            rows="5" placeholder="Sosial Media" required><?= $value->sosial_media?></textarea>
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
       foreach ($footer as $key => $value){
         ?>
<div class="modal fade" id="delete<?= $value->id_footer ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->kontak?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <h5>Apakah anda yakin akan menghapus data ini?</h5>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?= base_url('footer/delete/' . $value->id_footer);?>" type="submit" class="btn btn-outline-light">Delete</a>
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
  
