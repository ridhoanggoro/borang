<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("_partials/head.php"); ?>

</head>

<body id="page-top" onload="startTime()">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php"); ?>
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

  <!-- Bootstrap core & JavaScript-->
  <?php $this->load->view("_partials/js.php"); ?>
  <script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
		$('.form-control-chosen').chosen({
		  // Chosen options here
		  allow_single_deselect: true

		});
	})
</script>
<script type="text/javascript">
    function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('jam').innerHTML = "Waktu saat ini : " + h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
</script>
</body>

</html>
