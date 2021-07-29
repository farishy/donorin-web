
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <section class="content-header ml-4 mr-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Applicants Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Applicants Table</li>
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
                <img src="<?=base_url();?>/user/img/data.jpg" style="height: 250px; width: 100%;object-fit: cover; /* Do not scale the image */
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
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Education</th>
                    <th>School</th>
                    <th>Course</th>
                    <th>Course start at</th>
                    <th>Course end at</th>
                    <th>GPA</th>
                    <th>Website</th>
                    <th>Resume</th>
                    <th>Job Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($applicants as $a) :?>
                      <tr>
                      <th scope="row"><?= $a['id_applicant'];?></th>
                      <td><?= $a['fullName'];?></td>
                      <td><?= $a['email'];?></td>
                      <td><?= $a['phone'];?></td>
                      <td><?= $a['education'];?></td>
                      <td><?= $a['school'];?></td>
                      <td><?= $a['course'];?></td>
                      <td><?= $a['course_start_date'];?></td>
                      <td><?= $a['course_end_date'];?></td>
                      <td><?= $a['gpa'];?></td>
                      <td><?= $a['website'];?></td>
                      <td><?= $a['resume'];?></td>
                      <td><?= $a['name_job'];?></td>
                      <td><form class="d-inline" action="/dashboard/applicant/<?= $a['id_applicant'];?>" method="post">
                        <?= csrf_field();?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button onclick="return confirm('yakin');" type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                      </form></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div><br>
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
