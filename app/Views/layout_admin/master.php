<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <link rel="manifest" href="manifest.json" crossorigin>
  <meta name="msapplication-config" content="browserconfig.xml">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('admin/assets/imgs/template/favicon.svg') ?>">
  <link href="<?= base_url('admin/assets/css/style.css?version=4.1') ?>" rel="stylesheet">
  <title><?= $this->renderSection('title') ?> </title>
  <?= $this->renderSection('js_atas') ?>
  <?= $this->renderSection('css') ?>
</head>

<body class="<?= $this->renderSection('body_class') ?>">
  <?= $this->include('/layout_admin/preloader') ?>

  <header class="header sticky-bar">
    <?= $this->include('/layout_admin/topbar') ?>
  </header>

  <?= $this->include('/layout_admin/topbar_mobile') ?>
  <?= $this->renderSection('main') ?>

  <?= $this->renderSection('modal') ?>
  <?= $this->renderSection('footer') ?>
  <?= $this->renderSection('css_bawah') ?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?= base_url('admin/assets/js/plugins/counterup.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/vendor/modernizr-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/vendor/jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/vendor/jquery-migrate-3.3.0.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/vendor/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/waypoints.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/wow.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/magnific-popup.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/select2.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/isotope.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/scrollup.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/counterup.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/plugins/jquery.circliful.js') ?>"></script>
  <script src="<?= base_url('admin/assets/js/main.js?v=4.1') ?>"></script>
  <?= $this->renderSection('js') ?>
</body>

</html>