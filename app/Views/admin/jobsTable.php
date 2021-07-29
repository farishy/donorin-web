
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <section class="content-header ml-4 mr-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jobs Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Jobs Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ml-4 mr-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <img class="mb-3" src="<?=base_url();?>/user/img/1_F7jDU-BmuH2Nxc-_mlCftg.png" style="height: 250px; width: 100%;object-fit: cover; /* Do not scale the image */
                object-position: center; /* Center the image within the element */">
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
                    <th>Job Name</th>
                    <th>Departement</th>
                    <th>Summary</th>
                    <th>Description</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($job as $j) :?>
                      <tr>
                      <th scope="row"><?= $j['id_job'];?></th>
                      <td><?= $j['name_job'];?></td>
                      <td><?= $j['name_departement'];?></td>
                      <td><?= $j['abstrak'];?></td>
                      <td><?= $j['description'];?></td>
                      <td><?= $j['level'];?></td>
                      <td><?= $j['status'];?></td>
                      <td><a class="btn btn-outline-warning btn-sm mb-3" href="/dashboard/editjobsForm/<?= $j['id_job'];?>"><i class="fas fa-edit"></i></a>
                      <form class="d-inline" action="/dashboard/jobvacancy/<?= $j['id_job'];?>" method="post">
                        <?= csrf_field();?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button onclick="return confirm('yakin');" type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
