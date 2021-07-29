<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-4 mr-4">
      <div class="container-fluid mb-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">FAQ Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php foreach($frequencyaskquestion as $faq) :?>
    <form action="/dashboard/updtfaq/<?= $faq['idFaq']?>" enctype="multipart/form-data" method="post">
      <?= csrf_field(); ?>
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <img src="<?=base_url();?>/admin/dist/img/photo1.png" style="height: 250px;object-fit: cover; /* Do not scale the image */
          object-position: center; /* Center the image within the element */">
          <!-- /.card-header -->

          <div class="card-body">
            <div class="row">
              <div class="col-md">
              <div class="form-group">
                    <label for="icon">Icon FAQ</label>
                    <br>
                    <img src="<?= $faq['icon'];?>" style="width:200px; height:200px; object-fit: cover; margin-bottom:20px;">
                    <div class="input-group mb-3">
                <div class="custom-file">
                 <input id="icon" name="icon" type="file" class="custom-file-input" accept="image/png, image/jpg, image/jpeg" />
                 <label for="icon" class="custom-file-label text-truncate">Pilih Foto...</label>
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="judulFaq">Judul FAQ</label>
                    <input type="text" class="form-control" id="judulFaq" name="judulFaq" value="<?= $faq['judulFaq'];?>" placeholder="Masukkan Judul FAQ" required="required">
                </div>
                <div class="form-group">
                    <label for="sinopsisFaq">Sinopsis FAQ</label>
                    <input type="text" class="form-control" id="sinopsisFaq" name="sinopsisFaq" value="<?= $faq['sinopsisFaq'];?>" placeholder="Masukkan Sinopsis FAQ" required="required">
                </div>
                <div class="form-group">
                    <label for="kontenFaq">Konten FAQ</label>
                    <textarea class="form-control" id="kontenFaq" name="kontenFaq" rows="20"><?= $faq['kontenFaq'];?></textarea>
                </div>

                <!-- <input type="hidden" id="status" name="status" value="Active"> -->

              </div>
              <!-- /.col -->
              <!-- <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="20"></textarea>
                </div>
              </div> -->
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary font-weight-bold" style="width: 100%; font-size: 18px;">Submit</button>
          </div>
        </div>
        <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </form>
    <?php endforeach ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
