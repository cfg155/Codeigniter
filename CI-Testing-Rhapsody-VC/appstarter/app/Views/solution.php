<!-- call template -->
<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<!-- Your content -->
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .content {
        height: 100vh;
        display: grid;
        place-items: center;
    }
</style>

<div class="content">
    <h1>This is Solution Page</h1>
</div>

<?= $this->endSection(); ?>