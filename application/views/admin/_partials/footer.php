   <!-- Footer -->
   <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
    </footer>
    <!-- End of Footer -->

<script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/sb-admin-2.min.js'?>"></script>

<script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.js'?>"></script>
<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>