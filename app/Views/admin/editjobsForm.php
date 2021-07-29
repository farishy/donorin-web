<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-4 mr-4">
      <div class="container-fluid mb-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Job Vacancy Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Edit Job Vacancy Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php foreach($job as $j) :?>
    <form action="/dashboard/updtjobvacancy/<?= $j['id_job']?>" method="post">
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
          <img src="<?=base_url();?>/user/img/Altered-022.png" style="height: 250px;object-fit: cover; /* Do not scale the image */
          object-position: center; /* Center the image within the element */">
          <!-- /.card-header -->

          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="name_job">Job Vacancy Name</label>
                    <input type="text" value="<?= $j['name_job'];?>" class="form-control" id="name_job" name="name_job" placeholder="Enter a job vacancy name" required="required">
                </div>
                <div class="form-group">
                    <label for="abstark">Summary</label>
                    <input type="text" value="<?= $j['abstrak'];?>" class="form-control" id="abstrak" name="abstrak" placeholder="Summary of job vacancy" required="required">
                </div>
                <div class="form-group">
                  <label for="departement">Departement</label>
                  <select class="form-control custom-select" id="departement" name="departement" required>
                    <option value="" disabled hidden>Select a departement</option>
                    <?php foreach($departements as $departement) :?>
                      <option <?php if($j['id_departement']==$departement['id_departement']) echo "selected";?> value="<?= $departement['id_departement']; ?>"><?= $departement['name_departement']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="level">Level</label>
                  <select class="form-control custom-select" id="level" name="level" required>
                    <option value="" disabled hidden>Select a level</option>
                    <option <?php if($j['level']=='Internship') echo "selected";?> value="Internship">Internship</option>
                    <option <?php if($j['level']=='Entry Level') echo "selected";?> value="Entry Level">Entry Level</option>
                    <option <?php if($j['level']=='Experienced') echo "selected";?> value="Experienced">Experienced</option>
                    <option <?php if($j['level']=='Manager') echo "selected";?> value="Manager">Manager</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="level">Status</label>
                  <select class="form-control custom-select" id="status" name="status" required>
                    <option value="" disabled hidden>Select a status</option>
                    <option <?php if($j['status']=='Active') echo "selected";?> value="Active">Active</option>
                    <option <?php if($j['status']=='Inactive') echo "selected";?> value="Inactive">Inactive</option>
                  </select>
                </div>
                <!-- /.form-group -->

              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="20"><?= $j['description'];?></textarea>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col">
                <a href="/dashboard/jobstable" class="btn btn-danger font-weight-bold" style="width: 100%; font-size: 18px;">Cancel</a>
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
