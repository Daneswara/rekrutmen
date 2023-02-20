<?= $this->extend('/tinydash/master') ?>
<?= $this->section('tinydash_body_class') ?>
vertical  light
<?= $this->endSection() ?>
<?= $this->section('tinydash_body') ?>
    <!-- Page Loader -->
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
              
              <?= $this->include('/tinydash/leftmenu') ?>
            </nav>
        </aside>

        <main role="main" class="main-content">
            <div class="container-fluid">
              <?= $this->renderSection('content') ?>
            </div> <!-- .container-fluid -->
        </main> <!-- main -->
    </div> <!-- .wrapper -->

<?= $this->endSection() ?>

