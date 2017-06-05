
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- datatable -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="/bootstrap/js/datatables.js"></script>
<script>
$(document).ready(function() {

    $('#users').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "api/users",
        "columns":[
            {data: 'id'},
            {data: 'name'},
            {data: 'email'},

        ]
    });
});
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
