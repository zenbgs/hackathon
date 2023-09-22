<!DOCTYPE html>
<html lang="en">
<?php
$this->check_login->check();
require_once('head.php');
?>

<body class="g-sidenav-show bg-gray-100">
    <?php require_once('header.php'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <?php require_once('nav.php'); ?>
        <?php
    if (strpos($this->uri->segment(3), 'single')) {
      require_once('header_single.php');
    }
    ?>
        <div class="container-fluid py-4">
            <?php
      require_once('content.php');
      require_once('toast-message.php');
      require_once('footer.php');
      ?>
        </div>
    </main>
    <?php require_once('configurator.php') ?>

    <?php require_once('footer-asset.php') ?>
    <?php
  if (strpos($this->uri->segment(3), 'single')) {
    require_once('ajax_request.php');
  }
  ?>
</body>

</html>