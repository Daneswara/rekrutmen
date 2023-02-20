<?= $this->extend('/layout/master') ?>
<?= $this->section('main_class') ?>
main
<?= $this->endSection() ?>
<?= $this->section('main') ?>

<main class="<?= $this->renderSection('main_class') ?>">
    <div class="bg-homepage1"></div>
    <?= $this->renderSection('content') ?>
</main>

<?= $this->endSection() ?>
<?= $this->section('footer')?>

<?= $this->include('/layout/footer') ?>
<?= $this->endSection() ?>