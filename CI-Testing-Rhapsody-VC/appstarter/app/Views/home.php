<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .content {
        background-image: url("../assets/header-rhapsody-hospitality-newest.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
    }

    .content-item {
        position: absolute;
        right: 0;
        top: 20%;
        margin: 0 50px;
    }

    .content-item h1 {
        text-align: right;
    }
</style>

<div class="content">
    <div class="content-item">
        <h1>Trusted Partner for <br> Leading Operators <br> in Indonesia and Asia</h1>
        <img src="assets/client-rhapsody.png">
    </div>
</div>

<?= $this->endSection(); ?>