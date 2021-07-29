<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-4 mr-4">
      <div class="container-fluid mb-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Artikel Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="/dashboard/createartikel" enctype="multipart/form-data" method="post">
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
                    <label for="judulArtikel">Judul Artikel</label>
                    <input type="text" class="form-control" id="judulArtikel" name="judulArtikel" placeholder="Masukkan Judul Artikel" required="required">
                </div>
                <div class="form-group">
                    <label for="sinopsisArtikel">Sinopsis Artikel</label>
                    <input type="text" class="form-control" id="sinopsisArtikel" name="sinopsisArtikel" placeholder="Masukkan Sinopsis Artikel" required="required">
                </div>
                <div class="col-md">
                <div class="form-group">
                    <label for="kontenArtikel">Konten Artikel</label>
                    <textarea class="form-control" id="kontenArtikel" name="kontenArtikel" rows="20"></textarea>
                </div>
              </div>
              <div class="form-group">
                    <label for="gambarArtikel">Gambar Artikel</label>
                    <div class="input-group mb-3">
                <div class="custom-file">
                 <input id="gambarArtikel" name="gambarArtikel" type="file" class="custom-file-input" accept="image/png, image/jpg, image/jpeg" required="required"/>
                 <label for="gambarArtikel" class="custom-file-label text-truncate">Pilih Foto...</label>
                </div>
                </div>
                </div>
                <!-- <div class="form-group">
                    <label for="kontenArtikel">Konten Artikel</label>
                    <input type="text" class="form-control" id="kontenArtikel" name="kontenArtikel" placeholder="Masukkan Konten Artikel" required="required">
                </div> -->
                <div class="form-group">
                  <label for="tglRilis">Tanggal Rilis</label>
                  <input type="date" class="form-control" id="tglRilis" name="tglRilis" required>
                </div>
                <div class="form-group">
                  <label for="tipeArtikel">Tipe Artikel</label>
                  <select class="form-control custom-select" id="tipeArtikel" name="tipeArtikel" required>
                    <option value="" disabled selected hidden>Pilih Tipe</option>
                    <option value="Donor">Donor</option>
                    <option value="Info Grafis">Info Grafis</option>
                    <option value="Penyuluhan">Penyuluhan</option>
                    <option value="Bencana">Bencana</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="statusArtikel">Status Artikel</label>
                  <select class="form-control custom-select" id="statusArtikel" name="statusArtikel" required>
                    <option value="" disabled selected hidden>Pilih Status</option>
                    <option>Aktif</option>
                    <option>Tidak Aktif</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="penulis">nama Penulis</label>
                  <select class="form-control custom-select" id="penulis" name="penulis" required>
                    <option value="" disabled selected hidden>Pilih Nama Penulis</option>
                    <?php foreach($penulis as $p) :?>
                      <option value="<?= $p['idPenulis']; ?>"><?= $p['namaPenulis']; ?></option>
                    <?php endforeach ?>
                </div>
                <!-- /.form-group -->
                <!-- <div class="form-group">
                  <label for="level">Level</label>
                  <select class="form-control custom-select" id="level" name="level" required>
                    <option value="" disabled selected hidden>Select a level</option>
                    <option value="Internship">Internship</option>
                    <option value="Entry Level">Entry Level</option>
                    <option value="Experienced">Experienced</option>
                    <option value="Manager">Manager</option>
                  </select>
                </div> -->
                <!-- /.form-group -->

                <input type="hidden" id="status" name="status" value="Active">

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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
