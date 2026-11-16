
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mahasiswa</h2>

<p>Nama: <?= esc($nama) ?></p>
<p>NIM: <?= esc($nim) ?></p>

<?= $this->endSection() ?>
