<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-4 mr-4">
      <div class="container-fluid mb-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi Donor Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Transaksi Donor Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php foreach($transaksidonor as $td) :?>
    <form action="/dashboard/updttransaksi/<?= $td['idTransaksi']?>" enctype="multipart/form-data" method="post">
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
                    <input type="hidden" class="form-control" id="idAkun" name="idAkun" value="<?= $td['idAkun'];?>" placeholder="Masukkan Id Akun" required="required" >
                </div>
                <input type="hidden" class="form-control" id="tglTransaksi" name="tglTransaksi" value="<?= $td['tglTransaksi'];?>" placeholder="Masukkan Id Akun" required="required" >
                <div class="form-group">
                  <label for="statusTransaksi">Status Artikel</label>
                  <select class="form-control custom-select" id="statusTransaksi" name="statusTransaksi" required>
                    <option value="" disabled selected hidden>Pilih Status</option>
                    <option <?php if($td['statusTransaksi']=='On Progress') echo "selected";?> value="On Progress">On Progress</option>
                    <option <?php if($td['statusTransaksi']=='Selesai') echo "selected";?> value="Selesai">Selesai</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="idAkun">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $td['keterangan'];?>" placeholder="Masukkan keterangan" required="required">
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
