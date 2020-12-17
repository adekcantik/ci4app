<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>Daftar Pengaduan <?= $department ?></h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Department</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($pengaduan as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $data['nik'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['phone'] ?></td>
                            <td><?= $data['department'] ?></td>
                            <td><?= $data['message'] ?></td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>
