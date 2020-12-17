<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Welcome, <?= session()->get('nik') ?></h3>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>