<div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Media Sosial</h3>

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
                    <th width="30%">Nama Media</th>
                    <th width="30%">Icon</th>
                    <th>Link</th>
                    <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; 
                    foreach ($media_sosial as $key => $value){?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value->nama_media?></td>
                        <td><?= $value->icon?></td>
                        <td><?= $value->link?></td>
                        
                            <td class="text-center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_media ?>"
                            ><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_media ?>"
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
              <h4 class="modal-title">Add Media Sosial</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('media_sosial/add');
            ?>

                <div class="form-group mb-4">
                    <label>Nama Media</label>
                    <input class="form-control" id="nama_media" name="nama_media" placeholder="Nama Media" required></input>
                  </div>

                  <div class="form-group mb-4">
                    <label>Icon</label>
                    <input class="form-control" id="icon" name="icon" placeholder="Icon" required></input>
                  </div>

                  <div class="form-group mb-4">
                    <label>Link</label>
                    <input class="form-control" id="link" name="link" placeholder="Link" required></input>
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
       foreach ($media_sosial as $key => $value){
         ?>
<div class="modal fade" id="edit<?= $value->id_media ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Edit Media Sosial</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
            echo form_open('media_sosial/edit/' . $value->id_media);
            ?>

                  <div class="form-group mb-4">
                    <label>Nama Media</label>
                    <input class="form-control" id="nama_media" name="nama_media"
                    value="<?= $value->nama_media?>" placeholder="Nama Media" required></input>
                  </div>
                
                  <div class="form-group mb-4">
                    <label>Icon</label>
                    <input class="form-control" id="icon" name="icon" value="<?= $value->icon?>" placeholder="Icon" required></input>
                  </div>

                  <div class="form-group mb-4">
                    <label>Link</label>
                    <input class="form-control" id="link" name="link" value ="<?= $value->link?>" placeholder="Link" required></input>
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
       foreach ($media_sosial as $key => $value){
         ?>
<div class="modal fade" id="delete<?= $value->id_media ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->nama_media?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <h5>Apakah anda yakin akan menghapus data ini?</h5>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?= base_url('media_sosial/delete/' . $value->id_media);?>" type="submit" class="btn btn-outline-light">Delete</a>
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
  
