<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("layout/head.php"); ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      
      <?php $this->load->view("layout/navbar.php"); ?>

      <?php $this->load->view("layout/main-sidebar.php"); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $title; ?></h1>
          </div>
          
          <div class="section-body">
            <?php $this->load->view($content); ?>
          </div>
        </section>
      </div>

      <?php $this->load->view("layout/footer.php"); ?>
    </div>
  </div>
<!-- Scroll to Top Button-->
<?php $this->load->view("layout/scroll-top.php"); ?>
<!-- Logout Modal-->
<?php $this->load->view("layout/logout.php"); ?>

<?php if (!empty($modal)) {
  $this->load->view($modal); 
} ?>

<!-- Logout Modal-->
<?php $this->load->view("modal/modal_about.php"); ?>

<?php $this->load->view("layout/js.php"); ?>
</body>
</html>