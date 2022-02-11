<div class="col-md-12">
    <!--general form element disable-->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Add Banner</h3>
        </div>
    <!-- card header -->
    <div class="card-body">
        <?php 
        //notifikasi form kosong
        echo validation_errors('<div class= "alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden= "true"> &times; </button>
        <h5><i class="icon fas fa-info"></i>', '</h5></div>');
        //gagal upload
        if (isset($error_upload)){
            echo '<div class= "alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden= "true"> &times; </button>
            <h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5></div>';
        }
        echo form_open_multipart('banner/add')?>
        
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Text Header</label>
                    <textarea type="text" name="text1" class="form-control" rows="5" placeholder="Text" 
                    value="<?= set_value('text1');?>"></textarea>
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea type="text" name="text2" class="form-control" rows="5" placeholder="Text" 
                    value="<?= set_value('text2');?>"></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" id="preview_image" class="form-control" required>
            </div>
            </div>

            <div class="col-sm-6">
            <div class="form-group">
                <img src="<?= base_url('front-end/assets/img/nofoto.jpg')?>" id="image_load" width="200px" alt="">
            </div>
            </div>

            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm"> Simpan</button>
                <a href ="<?= base_url('banner');?>" class="btn btn-success btn-sm"> Kembali</a>
            </div>
        </div>
        <?php echo form_close() ?>
         </div>
    </div>
</div>

<script>
    function bacaImage(input){
        if (input.files && input.files[0]){
            var reader= new FileReader();
            reader.onload = function(e) {
                $('#image_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#preview_image").change(function() {
        bacaImage(this);
    });
</script>