<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("_partials/head.php"); ?>

</head>

<body id="page-top" onload="startTime()">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $nama = $this->session->userdata('nama');  
    $jenjang  = substr($nama, strlen($nama) - 2); 
    if ($jenjang == 'D3') {
      $this->load->view("_partials/sidebar_d3.php");
    } elseif ($jenjang == 'S3') {
      $this->load->view("_partials/sidebar_s3.php");
    } elseif ($jenjang == 'S2') {
      $this->load->view("_partials/sidebar_s2.php");
    } else {
      $this->load->view("_partials/sidebar.php");
    }
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("_partials/topbar.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php $this->load->view($content); ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("_partials/footer.php"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("_partials/scrolltop.php"); ?>

  <!-- Logout Modal-->
  <?php $this->load->view("_partials/modal.php"); ?>

  <!-- Upload Modal (Jika Diperlukan) -->
  <?php $this->load->view("_partials/modal_upload.php"); ?>

  <!-- Bootstrap core & JavaScript-->
  <?php $this->load->view("_partials/js.php"); ?>
  <script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
		$('.form-control-chosen').chosen({
		  // Chosen options here
		  allow_single_deselect: true

		});
    // Add the following code if you want the name of the file appear on select
     $(".custom-file-input").on("change", function() {
       var fileName = $(this).val().split("\\").pop();
       $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
     });
	})
</script>
</body>

</html>