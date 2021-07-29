<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-4 mr-4">
      <div class="container-fluid mb-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Departement Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Edit Departement Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php foreach($departements as $d) :?>
    <form action="/dashboard/updtdepartement/<?= $d['id_departement']?>" method="post">
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
          <img src="<?= base_url()?>/user/img/office.jpg" style="height: 250px;object-fit: cover; /* Do not scale the image */
          object-position: center; /* Center the image within the element */">
          <!-- /.card-header -->

          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <label for="name_departement">Departement Name</label>
                    <input type="text" value="<?= $d['name_departement'];?>" class="form-control" id="name_departement" name="name_departement" placeholder="Enter a departement name" required="required">
                </div>
            <!-- /.row -->
          </div>
        </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col">
                <a href="/dashboard/departementstable" class="btn btn-danger font-weight-bold" style="width: 100%; font-size: 18px;">Cancel</a>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-warning font-weight-bold" style="width: 100%; font-size: 18px;">Change</button>
              </div>
            </div>



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
