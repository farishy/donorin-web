
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <section class="content-header ml-4 mr-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Event dan Agenda Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Event dan Agenda Table</li>
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
                <img src="<?=base_url();?>/admin/dist/img/darahh.jpg" style="height: 250px; width: 100%;object-fit: cover; /* Do not scale the image */
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
                    <th>Tanggal Agenda</th>
                    <th>Judul Agenda</th>
                    <th>Sinopsis Agenda</th>
                    <th>Konten Agenda</th>
                    <th>Gambar Agenda</th>
                    <th>Status Agenda</th>
                    <th>Id Lokasi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($eventagenda as $ea) :?>
                      <tr>
                      <th scope="row"><?= $ea['idAgenda'];?></th>
                      <td><?= $ea['tglAgenda'];?></td>
                      <td><?= $ea['judulAgenda'];?></td>
                      <td><?= $ea['sinopsisAgenda'];?></td>
                      <td><?= $ea['kontenAgenda'];?></td>
                      <td><?= $ea['gambarAgenda'];?></td>
                      <td><?= $ea['statusAgenda'];?></td>
                      <td><?= $ea['idLokasi'];?></td>
                      <td><a class="btn btn-outline-warning btn-sm" href="/dashboard/editagenda/<?= $ea['idAgenda'];?>"><i class="fas fa-edit"></i></a>
                    <form class="d-inline" action="/dashboard/agendaTable/<?= $ea['idAgenda'];?>" method="post">
                      <?= csrf_field();?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button onclick="return confirm('yakin');" type="submit" class="btn btn-outline-danger btn-sm d-inline"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </td>
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
