<div class="container-fluid py-2">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
            Data Buku
        </div>
        <div class="card-body">
            <p class="h5">
                Disini Tempat Pengelolaan Buku
            </p>
        </div>
        <div class="card-footer d-flex justify-content-center ">
            <button class="btn btn-primary mx-2" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">Tambah Buku</button>
            <button class="btn btn-danger">Hapus Buku</button>
        </div>
    </div>
</div>

<div class="container-fluid py-2">
    <div class="card">
        <div class="card-body">
            <table id="table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>deskripsi</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>      
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