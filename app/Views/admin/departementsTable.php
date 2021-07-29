<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-4 mr-4">
      <div class="container-fluid mb-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Departements Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Departements Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">

            <img class="mb-3" src="<?= base_url()?>/user/img/office.jpg" style="height: 250px; width: 100%;object-fit: cover; /* Do not scale the image */
            object-position: center; /* Center the image within the element */"><hr>
            <h3 class="card-title">Form</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>

          <!-- /.card-header -->

          <div class="card-body">
            <div class="row">
              <div class="col-12">

                <form action="/dashboard/createdepartement" method="post">
                  <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="name_departement">Departement Name</label>
                    <input type="text" class="form-control" id="name_departement" name="name_departement" placeholder="Enter a departement name" required="required">
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary font-weight-bold" style="width: 100%; font-size: 18px;">Submit</button>
          </div>
        </form>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5>Table</h5><hr>
              <?php if(session()->getFlashdata('message')) :?>
                <div class="alert alert-success" role="alert">
                  <?= session()->getFlashdata('message');?>
                </div>
              <?php endif;?>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered" width="100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Departement Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($departements as $d) :?>
                    <tr>
                    <th scope="row"><?= $d['id_departement'];?></th>
                    <td><?= $d['name_departement'];?></td>
                    <td><a class="btn btn-outline-warning btn-sm" href="/dashboard/editdepartementForm/<?= $d['id_departement'];?>"><i class="fas fa-edit"></i></a>
                    <form class="d-inline" action="/dashboard/departement/<?= $d['id_departement'];?>" method="post">
                      <?= csrf_field();?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button onclick="return confirm('yakin');" type="submit" class="btn btn-outline-danger btn-sm d-inline"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </td>
                    </tr>
                  <?php endforeach;?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
