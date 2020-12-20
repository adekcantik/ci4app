<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3 class="p-2"><?= strtoupper($department) ?> - PENGADUAN : <?= strtoupper($status) ?></h3>
            <?php if ($validation->getErrors()) : ?>
                <div class="alert alert-danger mt-2" role="alert">
                    <?= $validation->listerrors(); ?>
                </div>
            <?php endif; ?>
            <?= session()->getFlashdata('msg'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Status</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Department</th>
                        <th scope="col">Message</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($pengaduan as $data) :
                        $status = $data['status'];
                        if ($data['status'] == 'Diterima') {
                            $badge = 'bg-info';
                        } elseif ($data['status'] == 'Diproses') {

                            $date1 = date("Y-m-d");
                            $date2 = date("Y-m-d", strtotime($data['updated_at']));
                            $diff = abs(strtotime($date1) - strtotime($date2));
                            $days = round($diff / (60 * 60 * 24));

                            if ($days >= 0 and $days <= 14) {
                                $badge = 'bg-success';
                            } elseif ($days > 14 and $days <= 30) {
                                $badge = 'bg-warning';
                            } else {
                                $badge = 'bg-danger';
                            }
                            $status .= ' (' . $days . ' hari)';
                        } else {
                            $badge = 'bg-primary';
                        }

                    ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td class="text-center">
                                <span class="badge <?= $badge ?>">
                                    <?= $status ?>
                                </span>
                                <br>
                                <small>
                                    <?php
                                    if ($data['status'] == 'Diterima') {
                                        echo $data['created_at'];
                                    } elseif ($data['status'] == 'Diproses') {
                                        echo $data['updated_at'];
                                    } else {
                                        echo $data['done_at'];
                                    } ?>
                                </small>
                            </td>
                            <td><?= $data['nik'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['phone'] ?></td>
                            <td><?= $data['department'] ?></td>
                            <td><?= $data['message'] ?></td>
                            <td>

                                <?php
                                if ($data['status'] == 'Diterima' and $isadmin == 1) {
                                ?>
                                    <a href="#" class="btn btn-sm btn-warning" onclick="ambilID(<?= $data['id'] ?>)" data-bs-toggle="modal" data-bs-target="#proses">Diproses</a>
                                    <a href="#" class="btn btn-sm btn-success" onclick="ambilID(<?= $data['id'] ?>)" data-bs-toggle="modal" data-bs-target="#selesai">Selesai</a>
                                <?php
                                } elseif ($data['status'] == 'Diproses' and $isadmin == 0) {
                                ?>
                                    <a href="#" class="btn btn-sm btn-success" onclick="ambilID(<?= $data['id'] ?>)" data-bs-toggle="modal" data-bs-target="#selesai">Selesai</a>
                                <?php
                                }
                                ?>

                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- proses -->
<div class="modal fade" id="proses" tabindex="-1" aria-labelledby="proseslabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('/admin/pengaduan/proses') ?>" method="POST">
                <input type="hidden" name="proses_id" value="" id="proses_id">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="proseslabel">Diproses</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Pilih Dinas:</label>
                    <select class="form-select" name="department" required>
                        <?php foreach ($dinas as $b) : ?>
                            <option value="<?= $b['department'] ?>"><?= $b['department'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- selesai -->
<div class="modal fade" id="selesai" tabindex="-1" aria-labelledby="selesailabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('/admin/pengaduan/selesai') ?>" method="POST">
                <input type="hidden" name="selesai_id" value="" id="selesai_id">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="selesailabel">Selesai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Description</label>
                    <input type="text" class="form-control" name="komentar" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function ambilID(id) {
        document.getElementById('proses_id').value = id;
        document.getElementById('selesai_id').value = id;
    }
</script>
<?= $this->endsection(); ?>