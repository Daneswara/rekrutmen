<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="<?=base_url('landing/images/favicon.png')?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="<?=base_url('vendor/tinydash/wika/fonts/Roboto/Roboto.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('vendor/tinydash/wika/fonts/MaterialIcons/material-icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" rel="stylesheet">

    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/simplebar.css')?>">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/feather.css') ?>">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/select2.css') ?>">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/dropzone.css') ?>">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/uppy.min.css') ?>">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/jquery.steps.css') ?>">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/jquery.timepicker.css') ?>">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/quill.snow.css') ?>">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/dataTables.bootstrap4.css') ?>">  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <!-- Jquery DataTable Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.1/css/rowGroup.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css"/>
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/daterangepicker.css') ?>">
    <!-- Bootstrap Select Css -->
    <!-- App CSS -->
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/app-light.css') ?>" id="lightTheme">
    <link rel="stylesheet" href="<?=base_url('vendor/tinydash/css/app-dark.css') ?>" id="darkTheme" disabled>
    <?= $this->renderSection('javascript_atas') ?>
    <?= $this->renderSection('css_atas') ?>
</head>
<body class="<?=$this->renderSection('tinydash_body_class')?>" >

    <?= $this->renderSection('tinydash_body') ?>
    
	  <?= $this->renderSection('modal') ?>
	  <?= $this->renderSection('css') ?>
	  <?= $this->renderSection('javascript') ?>
    <!-- Loading Overlay -->
    <script src="<?=base_url('vendor/tinydash/js/jquery.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/popper.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/moment.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/bootstrap.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/simplebar.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/daterangepicker.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/jquery.stickOnScroll.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/tinycolor-min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/config.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/d3.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/topojson.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/datamaps.all.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/datamaps-zoomto.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/datamaps.custom.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/Chart.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/DataTables/datatables.min.js') ?>"></script>    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="<?=base_url('vendor/tinydash/js/gauge.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/jquery.sparkline.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/apexcharts.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/apexcharts.custom.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/jquery.mask.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/select2.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/jquery.steps.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/jquery.validate.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/jquery.timepicker.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/dropzone.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/uppy.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/quill.min.js')?>"></script>
    <script src="<?=base_url('vendor/tinydash/js/apps.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/wika/plugins/jquery-loading-overlay/loadingoverlay.min.js') ?>"></script>
    <script src="<?=base_url('vendor/tinydash/wika/js/global.js?global=0120130') ?>"></script>
    <!-- shorten jquery -->
    <script src="<?=base_url('vendor/tinydash/wika/extensions/shorten/shorten.js') ?>"></script>
    <!-- Select Plugin Js -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      var ppp = localStorage.getItem("mode");
      anchor()
      function anchor() {
        if (ppp=='dark') {
          $('a').css({
              color: '#1fc8e3'
          });
        }
      }
      // function gtag()
      // {
      //   dataLayer.push(arguments);
      // }
      // gtag('js', new Date());
      // gtag('config', 'UA-56159088-1');
      // function keLogout() {
      // }
    </script>
</body>
</html>
