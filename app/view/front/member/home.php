<div class="container-fluid py-2 content">
    <h1 class="py-1">Data Member</h1>
    <div class="card mb-4">
        <div class="card-body">
            Disini Tempat Mengelola Member Yang Sudah Daftar Di Elysia Book
        </div>
        <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                Tambah Member
            </button>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="bi bi-table"></i>
            Data Member
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Member</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mem as $mber) { ?>
                        <tr>
                            <th><?= $mber->id ?></th>
                            <th><?= $mber->kode_member ?></th>
                            <th><?= $mber->nama ?></th>
                            <th><?= $mber->email ?></th>
                            <th><?= $mber->alamat ?></th>
                            <th>
                                <button data-bs-toggle="modal" data-bs-target="#modal2<?= $mber->id ?>" type="button" class="btn btn-info mr-2 ml-2" href="<?= base_url('member/edit/') ?>">Edit</button>
                                <a href="<?= base_url('member/hapus/') ?><?= $mber->id ?>" onclick="return confirm('apakah kamu yakin?')" class="btn btn-danger">Hapus</a>
                            </th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer class="py-4 bg-dark">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Elysia Book <script>
                    document.write(new Date().getFullYear());
                </script>
            </div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>