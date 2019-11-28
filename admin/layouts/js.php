<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- summernote -->
  <script src="vendor/summernote/summernote-bs4.js"></script>
  <script>
    $(document).ready(function() {
      $('.summernote').summernote({
        fontSizes: ['8', '9', '10', '11', '12', '14','15','16','18','20'],
        placeholder: 'Type here...',
        tabsize: 2,
        height: 200,
        toolbar: [
        ['style', ['style']],
        ['fontsize', ['fontsize']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
      ],
      });
  });
  </script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- <script src="js/demo/chart-area-demo.js"></script> -->
</body>

</html>
