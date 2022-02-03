<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<style>
    .jumbotron {
        background-image: url("<?= base_url('img/bg-jumbotron.jpg') ?>");
    }

    .display-4 {
        color: aliceblue;
    }

    .lead {
        color: aliceblue;
    }

    .putih {
        color: aliceblue;

    }
</style>
<div class="jumbotron">
    <h1 class="display-4">Hallo &nbsp;<?php echo session()->get('username'); ?></h1>
    <p class="lead">ingin berbelanja <span>Murah?</span> dengan harga yang minimum? </p>
    <hr class="my-4">
    <p class="putih">Klik Etalase, Atau langsung klik tombol di bawah</p>
    <p class="lead">
        <a class="btn btn-success btn-lg" href="<?= base_url('index.php/etalase/index'); ?>" role="button">Etalase</a>
    </p>
</div>
<?= $this->endSection() ?>