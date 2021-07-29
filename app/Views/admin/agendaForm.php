<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-4 mr-4">
      <div class="container-fluid mb-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Event dan Agenda Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Event dan Agenda Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="/dashboard/createagenda" enctype="multipart/form-data" method="post">
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
                    <label for="judulAgenda">Judul Agenda</label>
                    <input type="text" class="form-control" id="judulAgenda" name="judulAgenda" placeholder="Masukkan Judul Agenda" required="required">
                </div>
                <div class="form-group">
                    <label for="sinopsisAgenda">Sinopsis Agenda</label>
                    <input type="text" class="form-control" id="sinopsisAgenda" name="sinopsisAgenda" placeholder="Masukkan Sinopsis Agenda" required="required">
                </div>
                <div class="col-md">
                <div class="form-group">
                    <label for="kontenAgenda">Konten Agenda</label>
                    <textarea class="form-control" id="kontenAgenda" name="kontenAgenda" rows="20"></textarea>
                </div>
              </div>
                <div class="form-group">
                    <label for="gambarAgenda">Gambar Agenda</label>
                    <div class="input-group mb-3">
                <div class="custom-file">
                 <input id="gambarAgenda" name="gambarAgenda" type="file" class="custom-file-input" accept="image/png, image/jpg, image/jpeg" required="required"/>
                 <label for="gambarAgenda" class="custom-file-label text-truncate">Pilih Foto...</label>
                </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="tglAgenda">Tanggal Agenda</label>
                  <input type="date" class="form-control" id="tglAgenda" name="tglAgenda" required>
                </div>
                <div class="form-group">
                  <label for="statusAgenda">Status Agenda</label>
                  <select class="form-control custom-select" id="statusAgenda" name="statusAgenda" required>
                    <option value="" disabled selected hidden>Pilih Status</option>
                    <option>Sedang Berjalan</option>
                    <option>Selesai</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="lokasi">Lokasi Agenda</label>
                  <select class="form-control custom-select" id="lokasi" name="lokasi" required>
                    <option value="" disabled selected hidden>Pilih Lokasi Agenda</option>
                    <?php foreach($lokasi as $l) :?>
                      <option value="<?= $l['idLokasi']; ?>"><?= $l['namaLokasi']; ?></option>
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
