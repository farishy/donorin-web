<div class="content-wrapper bg-light">
  <!-- Content Header (Page header) -->
  <div class="content-header ml-4 mr-4">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Overview</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard/">Home</a></li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row m-3">
          <div class="col-lg-8">

            <h3>Selamat Datang, Admin</h3>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <div class="card text-center bg-warning m-3">
    <div class="card-header">
      Number of Applicants
    </div>
    <div class="card-body">
      <div class="counter-box"> <i class="fa fa-user" style="font-size:36px;"></i> <br>
        <span class="counter" style="font-size:64px; font-weight:bold;">80</span>
        <p>Applicants</p>
      </div>
      <a href="#" class="btn btn-primary">See More</a>
    </div>
  </div> -->

  <!-- /.content-header -->


</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>
  $(document).ready(function() {
    $('.counter').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
        }, {
      duration: 500, easing: 'swing', step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  });
</script>
