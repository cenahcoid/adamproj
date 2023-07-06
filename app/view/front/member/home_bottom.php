<!-- Modal Tambah -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1label">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url("member/tambah") ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nm" placeholder="Isi Nama Member">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="ml" placeholder="Isi Email Member">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="amt" placeholder="Isi Alamat Member">
                    </div>
                    <input style="float: right;" type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<?php foreach ($mem as $mber) { ?>
    <div class="modal fade" id="modal2<?= $mber->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal2label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal2label">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url("member/edit/") ?><?= $mber->id ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nam" placeholder="Isi Nama Member" value="<?= $mber->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="eml" placeholder="Isi Email Member" value="<?= $mber->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="amat" placeholder="Isi Alamat Member" value="<?= $mber->alamat ?>">
                        </div>
                        <input style="float: right;" type="submit" onclick="return confirm('Anda Yakin Akan Mengeditnya?')" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>