<?= $this->extend('/layout_admin/master') ?>
<?= $this->section('main_class') ?>
main
<?= $this->endSection() ?>
<?= $this->section('main') ?>

<main class="<?= $this->renderSection('main_class') ?>">
    <?= $this->include('/layout_admin/sidebar') ?>
    <?= $this->renderSection('content') ?>
</main>

<?= $this->endSection() ?>
<?= $this->section('footer') ?>

<?php $this->include('/layout_admin/footer') ?>
<?= $this->endSection() ?>