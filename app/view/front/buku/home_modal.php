<!-- Modal Tambah -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1label">Modal title</h5>
            </div>
            <div class="modal-body">
                <form method="post" class="tambah">
                    <div class="form-group">
                        <label for="kode">Kode Buku</label>
                        <input type="text" class="form-control" id="kode" name="kd" placeholder="Isi Nama Member" aria-describedby="KodeMember" required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="jdl" placeholder="Isi Nama Member" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="dks" placeholder="Isi Email Member" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="pnl" placeholder="Isi Alamat Member" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="pnt" placeholder="Isi Nama Member" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">jenis</label>
                        <select class="form-control" name="jns" id="jenis" value="" required>
                            <option value=""></option>
                            <option value="Ensiklopedia">Ensiklopedia</option>
                            <option value="Majalah">Majalah</option>
                            <option value="Kamus">Kamus</option>
                            <option value="Komik atau manga">Komik atau manga</option>
                            <option value="Novel">Novel</option>
                            <option value="Biografi">Biografi</option>
                            <option value="Naskah">Naskah</option>
                            <option value="Ligth novel (novel ringan)">Ligth novel (novel ringan)
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jmh" placeholder="Isi Nama Member" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="text" class="form-control" id="harga" name="hrg " placeholder="Isi Nama Member" required>
                    </div>
                    <div class="form-group py-2">
                        <input style="float: right;" type="submit" class="btn btn-primary oke" id="oke" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>