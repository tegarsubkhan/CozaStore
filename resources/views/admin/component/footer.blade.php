<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.13
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('asset_admin') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('asset_admin') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('asset_admin') }}/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="{{ asset('asset_admin') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('asset_admin') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{ asset('asset_admin') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('asset_admin') }}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset_admin') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('asset_admin') }}/dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  });

  $(document).ready(function() {
    $('.btnLogout').on('click', function(e){
      e.preventDefault();
      $('#formLogout').submit();
    });
    $('body').on('click', '.btnDelete', function(e){
      e.preventDefault();

      var url = $(this).data('url');
      var confirm = window.confirm('Apakah anda yakin ingin menghapus data ini?');
      if(confirm) {
        $('#formDelete').attr('action', url);
        $('#formDelete').submit();
      }
    });
    $('.selectStatus').on('change', function(){
      var val = $(this).val();

      $(this).parents('form').submit();
    });

    $('.select2').select2();

    $('.gambar').on('change', function(){
      var input = this;
      var url = $(this).val();
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.img-preview').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    });
  });
})
</script>
</body>
</html>
