
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 Donorin Corporation.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url()?>/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url()?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= base_url()?>/admin/dist/js/adminlte.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>/admin/lugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url()?>/admin/plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url()?>/admin/dist/js/demo.js"></script>
<script src="<?= base_url()?>/admin/dist/js/pages/dashboard3.js"></script>
<script src="<?= base_url()?>/admin/js/script.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "scrollX": true,
      "scrollY": 500,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
<script>
     $('.custom-file-input').on('change', function() {
       let fileName = $(this).val().split('\\').pop();
       $(this).next('.custom-file-label').addClass("selected").html(fileName);
     });
</script>
</body>
</html>
